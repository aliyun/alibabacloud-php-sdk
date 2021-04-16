<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\SearchAggregateObjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class motorList extends Model
{
    /**
     * @var string
     */
    public $deviceID;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $rightBottomY;

    /**
     * @var float
     */
    public $score;

    /**
     * @var int
     */
    public $rightBottomX;

    /**
     * @var float
     */
    public $deviceLongitude;

    /**
     * @var string
     */
    public $sourceImageUrl;

    /**
     * @var string
     */
    public $targetImageUrl;

    /**
     * @var int
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var int
     */
    public $leftTopX;

    /**
     * @var float
     */
    public $deviceLatitude;
    protected $_name = [
        'deviceID'        => 'DeviceID',
        'objectType'      => 'ObjectType',
        'deviceName'      => 'DeviceName',
        'rightBottomY'    => 'RightBottomY',
        'score'           => 'Score',
        'rightBottomX'    => 'RightBottomX',
        'deviceLongitude' => 'DeviceLongitude',
        'sourceImageUrl'  => 'SourceImageUrl',
        'targetImageUrl'  => 'TargetImageUrl',
        'leftTopY'        => 'LeftTopY',
        'shotTime'        => 'ShotTime',
        'personId'        => 'PersonId',
        'leftTopX'        => 'LeftTopX',
        'deviceLatitude'  => 'DeviceLatitude',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceID) {
            $res['DeviceID'] = $this->deviceID;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->deviceLongitude) {
            $res['DeviceLongitude'] = $this->deviceLongitude;
        }
        if (null !== $this->sourceImageUrl) {
            $res['SourceImageUrl'] = $this->sourceImageUrl;
        }
        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->deviceLatitude) {
            $res['DeviceLatitude'] = $this->deviceLatitude;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return motorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceID'])) {
            $model->deviceID = $map['DeviceID'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['DeviceLongitude'])) {
            $model->deviceLongitude = $map['DeviceLongitude'];
        }
        if (isset($map['SourceImageUrl'])) {
            $model->sourceImageUrl = $map['SourceImageUrl'];
        }
        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['DeviceLatitude'])) {
            $model->deviceLatitude = $map['DeviceLatitude'];
        }

        return $model;
    }
}
