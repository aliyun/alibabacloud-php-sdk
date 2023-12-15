<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapImageDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ageCodeReliability;

    /**
     * @var string
     */
    public $ageLowerLimit;

    /**
     * @var string
     */
    public $ageLowerLimitReliability;

    /**
     * @var string
     */
    public $ageUpLimit;

    /**
     * @var string
     */
    public $coatColor;

    /**
     * @var string
     */
    public $coatColorReliability;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $faceTargetImageStoragePath;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $genderCodeReliability;

    /**
     * @var string
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $motorTargetImageStoragePath;

    /**
     * @var string
     */
    public $personTargetImageStoragePath;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $rightBottomX;

    /**
     * @var string
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $sourceImageStoragePath;

    /**
     * @var string
     */
    public $trousersColor;

    /**
     * @var string
     */
    public $trousersColorReliability;

    /**
     * @var string
     */
    public $vehicleClass;

    /**
     * @var string
     */
    public $vehicleClassReliability;

    /**
     * @var string
     */
    public $vehicleColor;

    /**
     * @var string
     */
    public $vehicleColorReliability;
    protected $_name = [
        'ageCodeReliability'           => 'AgeCodeReliability',
        'ageLowerLimit'                => 'AgeLowerLimit',
        'ageLowerLimitReliability'     => 'AgeLowerLimitReliability',
        'ageUpLimit'                   => 'AgeUpLimit',
        'coatColor'                    => 'CoatColor',
        'coatColorReliability'         => 'CoatColorReliability',
        'dataSourceId'                 => 'DataSourceId',
        'faceTargetImageStoragePath'   => 'FaceTargetImageStoragePath',
        'gender'                       => 'Gender',
        'genderCodeReliability'        => 'GenderCodeReliability',
        'leftTopX'                     => 'LeftTopX',
        'leftTopY'                     => 'LeftTopY',
        'motorTargetImageStoragePath'  => 'MotorTargetImageStoragePath',
        'personTargetImageStoragePath' => 'PersonTargetImageStoragePath',
        'recordId'                     => 'RecordId',
        'rightBottomX'                 => 'RightBottomX',
        'rightBottomY'                 => 'RightBottomY',
        'shotTime'                     => 'ShotTime',
        'sourceImageStoragePath'       => 'SourceImageStoragePath',
        'trousersColor'                => 'TrousersColor',
        'trousersColorReliability'     => 'TrousersColorReliability',
        'vehicleClass'                 => 'VehicleClass',
        'vehicleClassReliability'      => 'VehicleClassReliability',
        'vehicleColor'                 => 'VehicleColor',
        'vehicleColorReliability'      => 'VehicleColorReliability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ageCodeReliability) {
            $res['AgeCodeReliability'] = $this->ageCodeReliability;
        }
        if (null !== $this->ageLowerLimit) {
            $res['AgeLowerLimit'] = $this->ageLowerLimit;
        }
        if (null !== $this->ageLowerLimitReliability) {
            $res['AgeLowerLimitReliability'] = $this->ageLowerLimitReliability;
        }
        if (null !== $this->ageUpLimit) {
            $res['AgeUpLimit'] = $this->ageUpLimit;
        }
        if (null !== $this->coatColor) {
            $res['CoatColor'] = $this->coatColor;
        }
        if (null !== $this->coatColorReliability) {
            $res['CoatColorReliability'] = $this->coatColorReliability;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->faceTargetImageStoragePath) {
            $res['FaceTargetImageStoragePath'] = $this->faceTargetImageStoragePath;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->genderCodeReliability) {
            $res['GenderCodeReliability'] = $this->genderCodeReliability;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->motorTargetImageStoragePath) {
            $res['MotorTargetImageStoragePath'] = $this->motorTargetImageStoragePath;
        }
        if (null !== $this->personTargetImageStoragePath) {
            $res['PersonTargetImageStoragePath'] = $this->personTargetImageStoragePath;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
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
        if (null !== $this->sourceImageStoragePath) {
            $res['SourceImageStoragePath'] = $this->sourceImageStoragePath;
        }
        if (null !== $this->trousersColor) {
            $res['TrousersColor'] = $this->trousersColor;
        }
        if (null !== $this->trousersColorReliability) {
            $res['TrousersColorReliability'] = $this->trousersColorReliability;
        }
        if (null !== $this->vehicleClass) {
            $res['VehicleClass'] = $this->vehicleClass;
        }
        if (null !== $this->vehicleClassReliability) {
            $res['VehicleClassReliability'] = $this->vehicleClassReliability;
        }
        if (null !== $this->vehicleColor) {
            $res['VehicleColor'] = $this->vehicleColor;
        }
        if (null !== $this->vehicleColorReliability) {
            $res['VehicleColorReliability'] = $this->vehicleColorReliability;
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
        if (isset($map['AgeCodeReliability'])) {
            $model->ageCodeReliability = $map['AgeCodeReliability'];
        }
        if (isset($map['AgeLowerLimit'])) {
            $model->ageLowerLimit = $map['AgeLowerLimit'];
        }
        if (isset($map['AgeLowerLimitReliability'])) {
            $model->ageLowerLimitReliability = $map['AgeLowerLimitReliability'];
        }
        if (isset($map['AgeUpLimit'])) {
            $model->ageUpLimit = $map['AgeUpLimit'];
        }
        if (isset($map['CoatColor'])) {
            $model->coatColor = $map['CoatColor'];
        }
        if (isset($map['CoatColorReliability'])) {
            $model->coatColorReliability = $map['CoatColorReliability'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['FaceTargetImageStoragePath'])) {
            $model->faceTargetImageStoragePath = $map['FaceTargetImageStoragePath'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['GenderCodeReliability'])) {
            $model->genderCodeReliability = $map['GenderCodeReliability'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['MotorTargetImageStoragePath'])) {
            $model->motorTargetImageStoragePath = $map['MotorTargetImageStoragePath'];
        }
        if (isset($map['PersonTargetImageStoragePath'])) {
            $model->personTargetImageStoragePath = $map['PersonTargetImageStoragePath'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
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
        if (isset($map['SourceImageStoragePath'])) {
            $model->sourceImageStoragePath = $map['SourceImageStoragePath'];
        }
        if (isset($map['TrousersColor'])) {
            $model->trousersColor = $map['TrousersColor'];
        }
        if (isset($map['TrousersColorReliability'])) {
            $model->trousersColorReliability = $map['TrousersColorReliability'];
        }
        if (isset($map['VehicleClass'])) {
            $model->vehicleClass = $map['VehicleClass'];
        }
        if (isset($map['VehicleClassReliability'])) {
            $model->vehicleClassReliability = $map['VehicleClassReliability'];
        }
        if (isset($map['VehicleColor'])) {
            $model->vehicleColor = $map['VehicleColor'];
        }
        if (isset($map['VehicleColorReliability'])) {
            $model->vehicleColorReliability = $map['VehicleColorReliability'];
        }

        return $model;
    }
}
