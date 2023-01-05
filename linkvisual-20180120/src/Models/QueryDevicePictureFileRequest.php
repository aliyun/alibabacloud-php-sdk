<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDevicePictureFileRequest extends Model
{
    /**
     * @example fdc576d03c094faea9fa10fbf48c****
     *
     * @var string
     */
    public $captureId;

    /**
     * @example camera1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 60
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example zLZyi6aOLyOSHa9hsPyD00****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot-cn-n6w1y******
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pictureType;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 100
     *
     * @var int
     */
    public $thumbWidth;
    protected $_name = [
        'captureId'     => 'CaptureId',
        'deviceName'    => 'DeviceName',
        'expireTime'    => 'ExpireTime',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'pictureType'   => 'PictureType',
        'productKey'    => 'ProductKey',
        'thumbWidth'    => 'ThumbWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->captureId) {
            $res['CaptureId'] = $this->captureId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pictureType) {
            $res['PictureType'] = $this->pictureType;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->thumbWidth) {
            $res['ThumbWidth'] = $this->thumbWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDevicePictureFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaptureId'])) {
            $model->captureId = $map['CaptureId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PictureType'])) {
            $model->pictureType = $map['PictureType'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ThumbWidth'])) {
            $model->thumbWidth = $map['ThumbWidth'];
        }

        return $model;
    }
}
