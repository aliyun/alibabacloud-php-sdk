<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\SearchObjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class motorList extends Model
{
    /**
     * @example 33010000xx132700119x
     *
     * @var string
     */
    public $deviceID;

    /**
     * @example 32
     *
     * @var int
     */
    public $leftTopX;

    /**
     * @example 62
     *
     * @var int
     */
    public $leftTopY;

    /**
     * @example Motor
     *
     * @var string
     */
    public $objectType;

    /**
     * @example 89
     *
     * @var int
     */
    public $rightBottomX;

    /**
     * @example 89
     *
     * @var int
     */
    public $rightBottomY;

    /**
     * @example 0.56
     *
     * @var float
     */
    public $score;

    /**
     * @example 2016-05-23T12:00:00Z
     *
     * @var string
     */
    public $shotTime;

    /**
     * @example http://url
     *
     * @var string
     */
    public $sourceImageUrl;

    /**
     * @example http://url
     *
     * @var string
     */
    public $targetImageUrl;
    protected $_name = [
        'deviceID'       => 'DeviceID',
        'leftTopX'       => 'LeftTopX',
        'leftTopY'       => 'LeftTopY',
        'objectType'     => 'ObjectType',
        'rightBottomX'   => 'RightBottomX',
        'rightBottomY'   => 'RightBottomY',
        'score'          => 'Score',
        'shotTime'       => 'ShotTime',
        'sourceImageUrl' => 'SourceImageUrl',
        'targetImageUrl' => 'TargetImageUrl',
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
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
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
     * @return motorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceID'])) {
            $model->deviceID = $map['DeviceID'];
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
