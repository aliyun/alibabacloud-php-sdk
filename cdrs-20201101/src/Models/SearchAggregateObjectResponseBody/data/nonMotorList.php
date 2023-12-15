<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\SearchAggregateObjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class nonMotorList extends Model
{
    /**
     * @var string
     */
    public $deviceID;

    /**
     * @var float
     */
    public $deviceLatitude;

    /**
     * @var float
     */
    public $deviceLongitude;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $leftTopX;

    /**
     * @var int
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var int
     */
    public $rightBottomX;

    /**
     * @var int
     */
    public $rightBottomY;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $sourceImageUrl;

    /**
     * @var string
     */
    public $targetImageUrl;
    protected $_name = [
        'deviceID'        => 'DeviceID',
        'deviceLatitude'  => 'DeviceLatitude',
        'deviceLongitude' => 'DeviceLongitude',
        'deviceName'      => 'DeviceName',
        'leftTopX'        => 'LeftTopX',
        'leftTopY'        => 'LeftTopY',
        'objectType'      => 'ObjectType',
        'personId'        => 'PersonId',
        'rightBottomX'    => 'RightBottomX',
        'rightBottomY'    => 'RightBottomY',
        'score'           => 'Score',
        'shotTime'        => 'ShotTime',
        'sourceImageUrl'  => 'SourceImageUrl',
        'targetImageUrl'  => 'TargetImageUrl',
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
        if (null !== $this->deviceLatitude) {
            $res['DeviceLatitude'] = $this->deviceLatitude;
        }
        if (null !== $this->deviceLongitude) {
            $res['DeviceLongitude'] = $this->deviceLongitude;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->sourceImageUrl) {
            $res['SourceImageUrl'] = $this->sourceImageUrl;
        }
        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nonMotorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceID'])) {
            $model->deviceID = $map['DeviceID'];
        }
        if (isset($map['DeviceLatitude'])) {
            $model->deviceLatitude = $map['DeviceLatitude'];
        }
        if (isset($map['DeviceLongitude'])) {
            $model->deviceLongitude = $map['DeviceLongitude'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['SourceImageUrl'])) {
            $model->sourceImageUrl = $map['SourceImageUrl'];
        }
        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }

        return $model;
    }
}
