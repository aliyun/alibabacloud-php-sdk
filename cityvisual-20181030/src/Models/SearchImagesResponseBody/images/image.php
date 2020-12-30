<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\SearchImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $cameraId;

    /**
     * @var float
     */
    public $trouserTypeScore;

    /**
     * @var string
     */
    public $objType;

    /**
     * @var string
     */
    public $trouserColor;

    /**
     * @var float
     */
    public $clothTypeScore;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $poseType;

    /**
     * @var string
     */
    public $vehicleColor;

    /**
     * @var int
     */
    public $objLeft;

    /**
     * @var float
     */
    public $score;

    /**
     * @var float
     */
    public $headWearScore;

    /**
     * @var float
     */
    public $ageTypeScore;

    /**
     * @var float
     */
    public $sexTypeScore;

    /**
     * @var string
     */
    public $nonVehicleType;

    /**
     * @var int
     */
    public $objBottom;

    /**
     * @var string
     */
    public $plateNumber;

    /**
     * @var string
     */
    public $clothType;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $origImage;

    /**
     * @var float
     */
    public $vehicleTypeScore;

    /**
     * @var float
     */
    public $trouserColorScore;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var float
     */
    public $vehicleColorScore;

    /**
     * @var float
     */
    public $hairTypeScore;

    /**
     * @var string
     */
    public $hairType;

    /**
     * @var float
     */
    public $nonVehicleTypeScore;

    /**
     * @var string
     */
    public $headWear;

    /**
     * @var string
     */
    public $vehicleType;

    /**
     * @var string
     */
    public $sexType;

    /**
     * @var float
     */
    public $poseTypeScore;

    /**
     * @var int
     */
    public $objRight;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var float
     */
    public $clothColorScore;

    /**
     * @var string
     */
    public $cropImage;

    /**
     * @var int
     */
    public $objTop;

    /**
     * @var float
     */
    public $brandScore;

    /**
     * @var string
     */
    public $clothColor;

    /**
     * @var string
     */
    public $ageType;

    /**
     * @var string
     */
    public $leaveTime;

    /**
     * @var string
     */
    public $trouserType;

    /**
     * @var string
     */
    public $entryTime;
    protected $_name = [
        'cameraId'            => 'CameraId',
        'trouserTypeScore'    => 'TrouserTypeScore',
        'objType'             => 'ObjType',
        'trouserColor'        => 'TrouserColor',
        'clothTypeScore'      => 'ClothTypeScore',
        'brand'               => 'Brand',
        'poseType'            => 'PoseType',
        'vehicleColor'        => 'VehicleColor',
        'objLeft'             => 'ObjLeft',
        'score'               => 'Score',
        'headWearScore'       => 'HeadWearScore',
        'ageTypeScore'        => 'AgeTypeScore',
        'sexTypeScore'        => 'SexTypeScore',
        'nonVehicleType'      => 'NonVehicleType',
        'objBottom'           => 'ObjBottom',
        'plateNumber'         => 'PlateNumber',
        'clothType'           => 'ClothType',
        'timeStamp'           => 'TimeStamp',
        'origImage'           => 'OrigImage',
        'vehicleTypeScore'    => 'VehicleTypeScore',
        'trouserColorScore'   => 'TrouserColorScore',
        'imageId'             => 'ImageId',
        'vehicleColorScore'   => 'VehicleColorScore',
        'hairTypeScore'       => 'HairTypeScore',
        'hairType'            => 'HairType',
        'nonVehicleTypeScore' => 'NonVehicleTypeScore',
        'headWear'            => 'HeadWear',
        'vehicleType'         => 'VehicleType',
        'sexType'             => 'SexType',
        'poseTypeScore'       => 'PoseTypeScore',
        'objRight'            => 'ObjRight',
        'feature'             => 'Feature',
        'clothColorScore'     => 'ClothColorScore',
        'cropImage'           => 'CropImage',
        'objTop'              => 'ObjTop',
        'brandScore'          => 'BrandScore',
        'clothColor'          => 'ClothColor',
        'ageType'             => 'AgeType',
        'leaveTime'           => 'LeaveTime',
        'trouserType'         => 'TrouserType',
        'entryTime'           => 'EntryTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cameraId) {
            $res['CameraId'] = $this->cameraId;
        }
        if (null !== $this->trouserTypeScore) {
            $res['TrouserTypeScore'] = $this->trouserTypeScore;
        }
        if (null !== $this->objType) {
            $res['ObjType'] = $this->objType;
        }
        if (null !== $this->trouserColor) {
            $res['TrouserColor'] = $this->trouserColor;
        }
        if (null !== $this->clothTypeScore) {
            $res['ClothTypeScore'] = $this->clothTypeScore;
        }
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }
        if (null !== $this->poseType) {
            $res['PoseType'] = $this->poseType;
        }
        if (null !== $this->vehicleColor) {
            $res['VehicleColor'] = $this->vehicleColor;
        }
        if (null !== $this->objLeft) {
            $res['ObjLeft'] = $this->objLeft;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->headWearScore) {
            $res['HeadWearScore'] = $this->headWearScore;
        }
        if (null !== $this->ageTypeScore) {
            $res['AgeTypeScore'] = $this->ageTypeScore;
        }
        if (null !== $this->sexTypeScore) {
            $res['SexTypeScore'] = $this->sexTypeScore;
        }
        if (null !== $this->nonVehicleType) {
            $res['NonVehicleType'] = $this->nonVehicleType;
        }
        if (null !== $this->objBottom) {
            $res['ObjBottom'] = $this->objBottom;
        }
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }
        if (null !== $this->clothType) {
            $res['ClothType'] = $this->clothType;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->origImage) {
            $res['OrigImage'] = $this->origImage;
        }
        if (null !== $this->vehicleTypeScore) {
            $res['VehicleTypeScore'] = $this->vehicleTypeScore;
        }
        if (null !== $this->trouserColorScore) {
            $res['TrouserColorScore'] = $this->trouserColorScore;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->vehicleColorScore) {
            $res['VehicleColorScore'] = $this->vehicleColorScore;
        }
        if (null !== $this->hairTypeScore) {
            $res['HairTypeScore'] = $this->hairTypeScore;
        }
        if (null !== $this->hairType) {
            $res['HairType'] = $this->hairType;
        }
        if (null !== $this->nonVehicleTypeScore) {
            $res['NonVehicleTypeScore'] = $this->nonVehicleTypeScore;
        }
        if (null !== $this->headWear) {
            $res['HeadWear'] = $this->headWear;
        }
        if (null !== $this->vehicleType) {
            $res['VehicleType'] = $this->vehicleType;
        }
        if (null !== $this->sexType) {
            $res['SexType'] = $this->sexType;
        }
        if (null !== $this->poseTypeScore) {
            $res['PoseTypeScore'] = $this->poseTypeScore;
        }
        if (null !== $this->objRight) {
            $res['ObjRight'] = $this->objRight;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->clothColorScore) {
            $res['ClothColorScore'] = $this->clothColorScore;
        }
        if (null !== $this->cropImage) {
            $res['CropImage'] = $this->cropImage;
        }
        if (null !== $this->objTop) {
            $res['ObjTop'] = $this->objTop;
        }
        if (null !== $this->brandScore) {
            $res['BrandScore'] = $this->brandScore;
        }
        if (null !== $this->clothColor) {
            $res['ClothColor'] = $this->clothColor;
        }
        if (null !== $this->ageType) {
            $res['AgeType'] = $this->ageType;
        }
        if (null !== $this->leaveTime) {
            $res['LeaveTime'] = $this->leaveTime;
        }
        if (null !== $this->trouserType) {
            $res['TrouserType'] = $this->trouserType;
        }
        if (null !== $this->entryTime) {
            $res['EntryTime'] = $this->entryTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CameraId'])) {
            $model->cameraId = $map['CameraId'];
        }
        if (isset($map['TrouserTypeScore'])) {
            $model->trouserTypeScore = $map['TrouserTypeScore'];
        }
        if (isset($map['ObjType'])) {
            $model->objType = $map['ObjType'];
        }
        if (isset($map['TrouserColor'])) {
            $model->trouserColor = $map['TrouserColor'];
        }
        if (isset($map['ClothTypeScore'])) {
            $model->clothTypeScore = $map['ClothTypeScore'];
        }
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }
        if (isset($map['PoseType'])) {
            $model->poseType = $map['PoseType'];
        }
        if (isset($map['VehicleColor'])) {
            $model->vehicleColor = $map['VehicleColor'];
        }
        if (isset($map['ObjLeft'])) {
            $model->objLeft = $map['ObjLeft'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['HeadWearScore'])) {
            $model->headWearScore = $map['HeadWearScore'];
        }
        if (isset($map['AgeTypeScore'])) {
            $model->ageTypeScore = $map['AgeTypeScore'];
        }
        if (isset($map['SexTypeScore'])) {
            $model->sexTypeScore = $map['SexTypeScore'];
        }
        if (isset($map['NonVehicleType'])) {
            $model->nonVehicleType = $map['NonVehicleType'];
        }
        if (isset($map['ObjBottom'])) {
            $model->objBottom = $map['ObjBottom'];
        }
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }
        if (isset($map['ClothType'])) {
            $model->clothType = $map['ClothType'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['OrigImage'])) {
            $model->origImage = $map['OrigImage'];
        }
        if (isset($map['VehicleTypeScore'])) {
            $model->vehicleTypeScore = $map['VehicleTypeScore'];
        }
        if (isset($map['TrouserColorScore'])) {
            $model->trouserColorScore = $map['TrouserColorScore'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['VehicleColorScore'])) {
            $model->vehicleColorScore = $map['VehicleColorScore'];
        }
        if (isset($map['HairTypeScore'])) {
            $model->hairTypeScore = $map['HairTypeScore'];
        }
        if (isset($map['HairType'])) {
            $model->hairType = $map['HairType'];
        }
        if (isset($map['NonVehicleTypeScore'])) {
            $model->nonVehicleTypeScore = $map['NonVehicleTypeScore'];
        }
        if (isset($map['HeadWear'])) {
            $model->headWear = $map['HeadWear'];
        }
        if (isset($map['VehicleType'])) {
            $model->vehicleType = $map['VehicleType'];
        }
        if (isset($map['SexType'])) {
            $model->sexType = $map['SexType'];
        }
        if (isset($map['PoseTypeScore'])) {
            $model->poseTypeScore = $map['PoseTypeScore'];
        }
        if (isset($map['ObjRight'])) {
            $model->objRight = $map['ObjRight'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['ClothColorScore'])) {
            $model->clothColorScore = $map['ClothColorScore'];
        }
        if (isset($map['CropImage'])) {
            $model->cropImage = $map['CropImage'];
        }
        if (isset($map['ObjTop'])) {
            $model->objTop = $map['ObjTop'];
        }
        if (isset($map['BrandScore'])) {
            $model->brandScore = $map['BrandScore'];
        }
        if (isset($map['ClothColor'])) {
            $model->clothColor = $map['ClothColor'];
        }
        if (isset($map['AgeType'])) {
            $model->ageType = $map['AgeType'];
        }
        if (isset($map['LeaveTime'])) {
            $model->leaveTime = $map['LeaveTime'];
        }
        if (isset($map['TrouserType'])) {
            $model->trouserType = $map['TrouserType'];
        }
        if (isset($map['EntryTime'])) {
            $model->entryTime = $map['EntryTime'];
        }

        return $model;
    }
}
