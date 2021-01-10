<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateProductFilterConfigRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

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
        'apiProduct'              => 'ApiProduct',
        'apiRevision'             => 'ApiRevision',
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
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
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
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
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
