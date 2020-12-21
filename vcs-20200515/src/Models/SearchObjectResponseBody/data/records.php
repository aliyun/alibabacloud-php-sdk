<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\SearchObjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $deviceID;

    /**
     * @var string
     */
    public $compareResult;

    /**
     * @var int
     */
    public $rightBtmX;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $sourceImageUrl;

    /**
     * @var string
     */
    public $sourceID;

    /**
     * @var int
     */
    public $rightBtmY;

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
    public $targetImagePath;

    /**
     * @var int
     */
    public $shotTime;

    /**
     * @var int
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $sourceImagePath;
    protected $_name = [
        'deviceID'        => 'DeviceID',
        'compareResult'   => 'CompareResult',
        'rightBtmX'       => 'RightBtmX',
        'score'           => 'Score',
        'sourceImageUrl'  => 'SourceImageUrl',
        'sourceID'        => 'SourceID',
        'rightBtmY'       => 'RightBtmY',
        'targetImageUrl'  => 'TargetImageUrl',
        'leftTopY'        => 'LeftTopY',
        'targetImagePath' => 'TargetImagePath',
        'shotTime'        => 'ShotTime',
        'leftTopX'        => 'LeftTopX',
        'sourceImagePath' => 'SourceImagePath',
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
        if (null !== $this->compareResult) {
            $res['CompareResult'] = $this->compareResult;
        }
        if (null !== $this->rightBtmX) {
            $res['RightBtmX'] = $this->rightBtmX;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sourceImageUrl) {
            $res['SourceImageUrl'] = $this->sourceImageUrl;
        }
        if (null !== $this->sourceID) {
            $res['SourceID'] = $this->sourceID;
        }
        if (null !== $this->rightBtmY) {
            $res['RightBtmY'] = $this->rightBtmY;
        }
        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->targetImagePath) {
            $res['TargetImagePath'] = $this->targetImagePath;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->sourceImagePath) {
            $res['SourceImagePath'] = $this->sourceImagePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceID'])) {
            $model->deviceID = $map['DeviceID'];
        }
        if (isset($map['CompareResult'])) {
            $model->compareResult = $map['CompareResult'];
        }
        if (isset($map['RightBtmX'])) {
            $model->rightBtmX = $map['RightBtmX'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SourceImageUrl'])) {
            $model->sourceImageUrl = $map['SourceImageUrl'];
        }
        if (isset($map['SourceID'])) {
            $model->sourceID = $map['SourceID'];
        }
        if (isset($map['RightBtmY'])) {
            $model->rightBtmY = $map['RightBtmY'];
        }
        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['TargetImagePath'])) {
            $model->targetImagePath = $map['TargetImagePath'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['SourceImagePath'])) {
            $model->sourceImagePath = $map['SourceImagePath'];
        }

        return $model;
    }
}
