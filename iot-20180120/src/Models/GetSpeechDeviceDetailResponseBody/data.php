<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechDeviceDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 200
     *
     * @var float
     */
    public $availableSpace;

    /**
     * @example test
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 4de2c367****8c585e5992**
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

    /**
     * @example 1620624606000
     *
     * @var int
     */
    public $speechListUpdateTime;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @example 2000
     *
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
