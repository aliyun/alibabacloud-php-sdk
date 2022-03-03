<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechDeviceDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $availableSpace;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $speechListUpdateTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var float
     */
    public $totalSpace;
    protected $_name = [
        'availableSpace'       => 'AvailableSpace',
        'deviceName'           => 'DeviceName',
        'iotId'                => 'IotId',
        'productKey'           => 'ProductKey',
        'speechListUpdateTime' => 'SpeechListUpdateTime',
        'status'               => 'Status',
        'totalSpace'           => 'TotalSpace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableSpace) {
            $res['AvailableSpace'] = $this->availableSpace;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->speechListUpdateTime) {
            $res['SpeechListUpdateTime'] = $this->speechListUpdateTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalSpace) {
            $res['TotalSpace'] = $this->totalSpace;
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
        if (isset($map['AvailableSpace'])) {
            $model->availableSpace = $map['AvailableSpace'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SpeechListUpdateTime'])) {
            $model->speechListUpdateTime = $map['SpeechListUpdateTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalSpace'])) {
            $model->totalSpace = $map['TotalSpace'];
        }

        return $model;
    }
}
