<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchRegisterDeviceWithApplyIdRequest extends Model
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
     * @var int
     */
    public $applyId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'applyId'       => 'ApplyId',
    ];

    public function validate()
    {
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('applyId', $this->applyId, true);
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
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchRegisterDeviceWithApplyIdRequest
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
        if (isset($map['ApplyId'])) {
            $model->applyId = $map['ApplyId'];
        }

        return $model;
    }
}
