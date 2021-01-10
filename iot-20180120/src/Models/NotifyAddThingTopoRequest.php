<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class NotifyAddThingTopoRequest extends Model
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
    public $deviceListStr;

    /**
     * @var string
     */
    public $gwIotId;

    /**
     * @var string
     */
    public $gwProductKey;

    /**
     * @var string
     */
    public $gwDeviceName;
    protected $_name = [
        'apiProduct'    => 'ApiProduct',
        'apiRevision'   => 'ApiRevision',
        'iotInstanceId' => 'IotInstanceId',
        'deviceListStr' => 'DeviceListStr',
        'gwIotId'       => 'GwIotId',
        'gwProductKey'  => 'GwProductKey',
        'gwDeviceName'  => 'GwDeviceName',
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
        if (null !== $this->deviceListStr) {
            $res['DeviceListStr'] = $this->deviceListStr;
        }
        if (null !== $this->gwIotId) {
            $res['GwIotId'] = $this->gwIotId;
        }
        if (null !== $this->gwProductKey) {
            $res['GwProductKey'] = $this->gwProductKey;
        }
        if (null !== $this->gwDeviceName) {
            $res['GwDeviceName'] = $this->gwDeviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotifyAddThingTopoRequest
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
        if (isset($map['DeviceListStr'])) {
            $model->deviceListStr = $map['DeviceListStr'];
        }
        if (isset($map['GwIotId'])) {
            $model->gwIotId = $map['GwIotId'];
        }
        if (isset($map['GwProductKey'])) {
            $model->gwProductKey = $map['GwProductKey'];
        }
        if (isset($map['GwDeviceName'])) {
            $model->gwDeviceName = $map['GwDeviceName'];
        }

        return $model;
    }
}
