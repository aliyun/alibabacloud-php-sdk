<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListMotorAlgorithmResultsResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $motorClass;

    /**
     * @var float
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $picUrlPath;

    /**
     * @var string
     */
    public $plateClass;

    /**
     * @var string
     */
    public $plateColor;

    /**
     * @var float
     */
    public $rightBottomX;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $safetyBelt;

    /**
     * @var string
     */
    public $motorStyle;

    /**
     * @var string
     */
    public $targetPicUrlPath;

    /**
     * @var float
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $motorColor;

    /**
     * @var string
     */
    public $plateNumber;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $calling;

    /**
     * @var float
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $motorBrand;

    /**
     * @var string
     */
    public $motorModel;

    /**
     * @var string
     */
    public $motorId;
    protected $_name = [
        'motorClass'       => 'MotorClass',
        'rightBottomY'     => 'RightBottomY',
        'dataSourceId'     => 'DataSourceId',
        'picUrlPath'       => 'PicUrlPath',
        'plateClass'       => 'PlateClass',
        'plateColor'       => 'PlateColor',
        'rightBottomX'     => 'RightBottomX',
        'sourceId'         => 'SourceId',
        'safetyBelt'       => 'SafetyBelt',
        'motorStyle'       => 'MotorStyle',
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'leftTopY'         => 'LeftTopY',
        'motorColor'       => 'MotorColor',
        'plateNumber'      => 'PlateNumber',
        'corpId'           => 'CorpId',
        'shotTime'         => 'ShotTime',
        'calling'          => 'Calling',
        'leftTopX'         => 'LeftTopX',
        'motorBrand'       => 'MotorBrand',
        'motorModel'       => 'MotorModel',
        'motorId'          => 'MotorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->motorClass) {
            $res['MotorClass'] = $this->motorClass;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->plateClass) {
            $res['PlateClass'] = $this->plateClass;
        }
        if (null !== $this->plateColor) {
            $res['PlateColor'] = $this->plateColor;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->safetyBelt) {
            $res['SafetyBelt'] = $this->safetyBelt;
        }
        if (null !== $this->motorStyle) {
            $res['MotorStyle'] = $this->motorStyle;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->motorColor) {
            $res['MotorColor'] = $this->motorColor;
        }
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->calling) {
            $res['Calling'] = $this->calling;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->motorBrand) {
            $res['MotorBrand'] = $this->motorBrand;
        }
        if (null !== $this->motorModel) {
            $res['MotorModel'] = $this->motorModel;
        }
        if (null !== $this->motorId) {
            $res['MotorId'] = $this->motorId;
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
        if (isset($map['MotorClass'])) {
            $model->motorClass = $map['MotorClass'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['PlateClass'])) {
            $model->plateClass = $map['PlateClass'];
        }
        if (isset($map['PlateColor'])) {
            $model->plateColor = $map['PlateColor'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SafetyBelt'])) {
            $model->safetyBelt = $map['SafetyBelt'];
        }
        if (isset($map['MotorStyle'])) {
            $model->motorStyle = $map['MotorStyle'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['MotorColor'])) {
            $model->motorColor = $map['MotorColor'];
        }
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['Calling'])) {
            $model->calling = $map['Calling'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['MotorBrand'])) {
            $model->motorBrand = $map['MotorBrand'];
        }
        if (isset($map['MotorModel'])) {
            $model->motorModel = $map['MotorModel'];
        }
        if (isset($map['MotorId'])) {
            $model->motorId = $map['MotorId'];
        }

        return $model;
    }
}
