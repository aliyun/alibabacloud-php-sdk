<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDevicePictureByListRequest extends Model
{
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
     * @example 1CJ0****e7qiq8VkQi1000000
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
     * @example cFc5MzZ****npYT1***TDFzX1hrVzA0Z****
     *
     * @var string[]
     */
    public $pictureIdList;

    /**
     * @example 2
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
        'deviceName'    => 'DeviceName',
        'expireTime'    => 'ExpireTime',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'pictureIdList' => 'PictureIdList',
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
        if (null !== $this->pictureIdList) {
            $res['PictureIdList'] = $this->pictureIdList;
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
     * @return QueryDevicePictureByListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['PictureIdList'])) {
            if (!empty($map['PictureIdList'])) {
                $model->pictureIdList = $map['PictureIdList'];
            }
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
