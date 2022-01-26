<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20190430\Models\DescribeDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceCode;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $frameRate;

    /**
     * @var float
     */
    public $imageSize;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $pullStreamStatus;

    /**
     * @var string
     */
    public $realTimeDataRate;

    /**
     * @var float
     */
    public $structuredSize;

    /**
     * @var float
     */
    public $vectorSize;
    protected $_name = [
        'deviceCode'       => 'DeviceCode',
        'deviceId'         => 'DeviceId',
        'deviceName'       => 'DeviceName',
        'deviceType'       => 'DeviceType',
        'frameRate'        => 'FrameRate',
        'imageSize'        => 'ImageSize',
        'location'         => 'Location',
        'owner'            => 'Owner',
        'pullStreamStatus' => 'PullStreamStatus',
        'realTimeDataRate' => 'RealTimeDataRate',
        'structuredSize'   => 'StructuredSize',
        'vectorSize'       => 'VectorSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCode) {
            $res['DeviceCode'] = $this->deviceCode;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pullStreamStatus) {
            $res['PullStreamStatus'] = $this->pullStreamStatus;
        }
        if (null !== $this->realTimeDataRate) {
            $res['RealTimeDataRate'] = $this->realTimeDataRate;
        }
        if (null !== $this->structuredSize) {
            $res['StructuredSize'] = $this->structuredSize;
        }
        if (null !== $this->vectorSize) {
            $res['VectorSize'] = $this->vectorSize;
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
        if (isset($map['DeviceCode'])) {
            $model->deviceCode = $map['DeviceCode'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PullStreamStatus'])) {
            $model->pullStreamStatus = $map['PullStreamStatus'];
        }
        if (isset($map['RealTimeDataRate'])) {
            $model->realTimeDataRate = $map['RealTimeDataRate'];
        }
        if (isset($map['StructuredSize'])) {
            $model->structuredSize = $map['StructuredSize'];
        }
        if (isset($map['VectorSize'])) {
            $model->vectorSize = $map['VectorSize'];
        }

        return $model;
    }
}
