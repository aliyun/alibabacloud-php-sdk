<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\SearchObjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class faceList extends Model
{
    /**
     * @var string
     */
    public $sourceImageUrl;

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
    public $targetImageUrl;

    /**
     * @var int
     */
    public $rightBottomY;

    /**
     * @var int
     */
    public $leftTopY;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var int
     */
    public $rightBottomX;

    /**
     * @var int
     */
    public $leftTopX;
    protected $_name = [
        'sourceImageUrl' => 'SourceImageUrl',
        'deviceID'       => 'DeviceID',
        'objectType'     => 'ObjectType',
        'targetImageUrl' => 'TargetImageUrl',
        'rightBottomY'   => 'RightBottomY',
        'leftTopY'       => 'LeftTopY',
        'score'          => 'Score',
        'shotTime'       => 'ShotTime',
        'rightBottomX'   => 'RightBottomX',
        'leftTopX'       => 'LeftTopX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceImageUrl) {
            $res['SourceImageUrl'] = $this->sourceImageUrl;
        }
        if (null !== $this->deviceID) {
            $res['DeviceID'] = $this->deviceID;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceImageUrl'])) {
            $model->sourceImageUrl = $map['SourceImageUrl'];
        }
        if (isset($map['DeviceID'])) {
            $model->deviceID = $map['DeviceID'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }

        return $model;
    }
}
