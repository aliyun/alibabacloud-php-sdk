<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchGrayMigrationDeviceRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceNames;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceNames' => 'DeviceNames',
        'productKey'  => 'ProductKey',
    ];

    public function validate()
    {
        Model::validateRequired('deviceNames', $this->deviceNames, true);
        Model::validateRequired('productKey', $this->productKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNames) {
            $res['DeviceNames'] = $this->deviceNames;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGrayMigrationDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNames'])) {
            if (!empty($map['DeviceNames'])) {
                $model->deviceNames = $map['DeviceNames'];
            }
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
