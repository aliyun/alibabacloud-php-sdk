<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListMotorAlgorithmResultsResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var float
     */
    public $leftTopX;

    /**
     * @var float
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $motorId;

    /**
     * @var string
     */
    public $picUrlPath;

    /**
     * @var string
     */
    public $plateNumber;

    /**
     * @var float
     */
    public $rightBottomX;

    /**
     * @var float
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $targetPicUrlPath;

    /**
     * @var string
     */
    public $motorStyle;

    /**
     * @var string
     */
    public $motorModel;

    /**
     * @var string
     */
    public $motorColor;

    /**
     * @var string
     */
    public $motorClass;

    /**
     * @var string
     */
    public $motorBrand;

    /**
     * @var string
     */
    public $plateColor;

    /**
     * @var string
     */
    public $plateClass;

    /**
     * @var string
     */
    public $safetyBelt;

    /**
     * @var string
     */
    public $calling;

    /**
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'corpId'           => 'CorpId',
        'dataSourceId'     => 'DataSourceId',
        'leftTopX'         => 'LeftTopX',
        'leftTopY'         => 'LeftTopY',
        'motorId'          => 'MotorId',
        'picUrlPath'       => 'PicUrlPath',
        'plateNumber'      => 'PlateNumber',
        'rightBottomX'     => 'RightBottomX',
        'rightBottomY'     => 'RightBottomY',
        'shotTime'         => 'ShotTime',
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'motorStyle'       => 'MotorStyle',
        'motorModel'       => 'MotorModel',
        'motorColor'       => 'MotorColor',
        'motorClass'       => 'MotorClass',
        'motorBrand'       => 'MotorBrand',
        'plateColor'       => 'PlateColor',
        'plateClass'       => 'PlateClass',
        'safetyBelt'       => 'SafetyBelt',
        'calling'          => 'Calling',
        'sourceId'         => 'SourceId',
    ];

    public function validate()
    {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('dataSourceId', $this->dataSourceId, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('motorId', $this->motorId, true);
        Model::validateRequired('picUrlPath', $this->picUrlPath, true);
        Model::validateRequired('plateNumber', $this->plateNumber, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('shotTime', $this->shotTime, true);
        Model::validateRequired('targetPicUrlPath', $this->targetPicUrlPath, true);
        Model::validateRequired('motorStyle', $this->motorStyle, true);
        Model::validateRequired('motorModel', $this->motorModel, true);
        Model::validateRequired('motorColor', $this->motorColor, true);
        Model::validateRequired('motorClass', $this->motorClass, true);
        Model::validateRequired('motorBrand', $this->motorBrand, true);
        Model::validateRequired('plateColor', $this->plateColor, true);
        Model::validateRequired('plateClass', $this->plateClass, true);
        Model::validateRequired('safetyBelt', $this->safetyBelt, true);
        Model::validateRequired('calling', $this->calling, true);
        Model::validateRequired('sourceId', $this->sourceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->motorId) {
            $res['MotorId'] = $this->motorId;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->motorStyle) {
            $res['MotorStyle'] = $this->motorStyle;
        }
        if (null !== $this->motorModel) {
            $res['MotorModel'] = $this->motorModel;
        }
        if (null !== $this->motorColor) {
            $res['MotorColor'] = $this->motorColor;
        }
        if (null !== $this->motorClass) {
            $res['MotorClass'] = $this->motorClass;
        }
        if (null !== $this->motorBrand) {
            $res['MotorBrand'] = $this->motorBrand;
        }
        if (null !== $this->plateColor) {
            $res['PlateColor'] = $this->plateColor;
        }
        if (null !== $this->plateClass) {
            $res['PlateClass'] = $this->plateClass;
        }
        if (null !== $this->safetyBelt) {
            $res['SafetyBelt'] = $this->safetyBelt;
        }
        if (null !== $this->calling) {
            $res['Calling'] = $this->calling;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
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
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['MotorId'])) {
            $model->motorId = $map['MotorId'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['MotorStyle'])) {
            $model->motorStyle = $map['MotorStyle'];
        }
        if (isset($map['MotorModel'])) {
            $model->motorModel = $map['MotorModel'];
        }
        if (isset($map['MotorColor'])) {
            $model->motorColor = $map['MotorColor'];
        }
        if (isset($map['MotorClass'])) {
            $model->motorClass = $map['MotorClass'];
        }
        if (isset($map['MotorBrand'])) {
            $model->motorBrand = $map['MotorBrand'];
        }
        if (isset($map['PlateColor'])) {
            $model->plateColor = $map['PlateColor'];
        }
        if (isset($map['PlateClass'])) {
            $model->plateClass = $map['PlateClass'];
        }
        if (isset($map['SafetyBelt'])) {
            $model->safetyBelt = $map['SafetyBelt'];
        }
        if (isset($map['Calling'])) {
            $model->calling = $map['Calling'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}
