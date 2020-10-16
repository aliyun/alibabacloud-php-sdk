<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\SearchObjectResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $compareResult;

    /**
     * @var string
     */
    public $deviceID;

    /**
     * @var int
     */
    public $shotTime;

    /**
     * @var int
     */
    public $leftTopX;

    /**
     * @var int
     */
    public $leftTopY;

    /**
     * @var int
     */
    public $rightBtmX;

    /**
     * @var int
     */
    public $rightBtmY;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $sourceID;

    /**
     * @var string
     */
    public $sourceImagePath;

    /**
     * @var string
     */
    public $sourceImageUrl;

    /**
     * @var string
     */
    public $targetImagePath;

    /**
     * @var string
     */
    public $targetImageUrl;
    protected $_name = [
        'compareResult'   => 'CompareResult',
        'deviceID'        => 'DeviceID',
        'shotTime'        => 'ShotTime',
        'leftTopX'        => 'LeftTopX',
        'leftTopY'        => 'LeftTopY',
        'rightBtmX'       => 'RightBtmX',
        'rightBtmY'       => 'RightBtmY',
        'score'           => 'Score',
        'sourceID'        => 'SourceID',
        'sourceImagePath' => 'SourceImagePath',
        'sourceImageUrl'  => 'SourceImageUrl',
        'targetImagePath' => 'TargetImagePath',
        'targetImageUrl'  => 'TargetImageUrl',
    ];

    public function validate()
    {
        Model::validateRequired('compareResult', $this->compareResult, true);
        Model::validateRequired('deviceID', $this->deviceID, true);
        Model::validateRequired('shotTime', $this->shotTime, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('rightBtmX', $this->rightBtmX, true);
        Model::validateRequired('rightBtmY', $this->rightBtmY, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('sourceID', $this->sourceID, true);
        Model::validateRequired('sourceImagePath', $this->sourceImagePath, true);
        Model::validateRequired('sourceImageUrl', $this->sourceImageUrl, true);
        Model::validateRequired('targetImagePath', $this->targetImagePath, true);
        Model::validateRequired('targetImageUrl', $this->targetImageUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compareResult) {
            $res['CompareResult'] = $this->compareResult;
        }
        if (null !== $this->deviceID) {
            $res['DeviceID'] = $this->deviceID;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->rightBtmX) {
            $res['RightBtmX'] = $this->rightBtmX;
        }
        if (null !== $this->rightBtmY) {
            $res['RightBtmY'] = $this->rightBtmY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sourceID) {
            $res['SourceID'] = $this->sourceID;
        }
        if (null !== $this->sourceImagePath) {
            $res['SourceImagePath'] = $this->sourceImagePath;
        }
        if (null !== $this->sourceImageUrl) {
            $res['SourceImageUrl'] = $this->sourceImageUrl;
        }
        if (null !== $this->targetImagePath) {
            $res['TargetImagePath'] = $this->targetImagePath;
        }
        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
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
        if (isset($map['CompareResult'])) {
            $model->compareResult = $map['CompareResult'];
        }
        if (isset($map['DeviceID'])) {
            $model->deviceID = $map['DeviceID'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['RightBtmX'])) {
            $model->rightBtmX = $map['RightBtmX'];
        }
        if (isset($map['RightBtmY'])) {
            $model->rightBtmY = $map['RightBtmY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SourceID'])) {
            $model->sourceID = $map['SourceID'];
        }
        if (isset($map['SourceImagePath'])) {
            $model->sourceImagePath = $map['SourceImagePath'];
        }
        if (isset($map['SourceImageUrl'])) {
            $model->sourceImageUrl = $map['SourceImageUrl'];
        }
        if (isset($map['TargetImagePath'])) {
            $model->targetImagePath = $map['TargetImagePath'];
        }
        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }

        return $model;
    }
}
