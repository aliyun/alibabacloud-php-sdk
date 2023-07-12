<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GisSearchDeviceTraceResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\GisSearchDeviceTraceResponse\data\points;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var points[]
     */
    public $points;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'productKey' => 'ProductKey',
        'points'     => 'Points',
    ];

    public function validate()
    {
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('points', $this->points, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->points) {
            $res['Points'] = [];
            if (null !== $this->points && \is_array($this->points)) {
                $n = 0;
                foreach ($this->points as $item) {
                    $res['Points'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = [];
                $n             = 0;
                foreach ($map['Points'] as $item) {
                    $model->points[$n++] = null !== $item ? points::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
