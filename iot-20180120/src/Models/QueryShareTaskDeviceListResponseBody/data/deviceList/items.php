<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryShareTaskDeviceListResponseBody\data\deviceList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 1620624606000
     *
     * @var int
     */
    public $gmtAdded;

    /**
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'gmtAdded'   => 'GmtAdded',
        'iotId'      => 'IotId',
        'productKey' => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->gmtAdded) {
            $res['GmtAdded'] = $this->gmtAdded;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['GmtAdded'])) {
            $model->gmtAdded = $map['GmtAdded'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
