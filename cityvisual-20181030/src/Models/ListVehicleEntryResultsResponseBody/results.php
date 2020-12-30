<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListVehicleEntryResultsResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $cameraId;

    /**
     * @var int
     */
    public $objRight;

    /**
     * @var string
     */
    public $objType;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var int
     */
    public $plateLeft;

    /**
     * @var int
     */
    public $objLeft;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $cropImage;

    /**
     * @var int
     */
    public $objTop;

    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $plateBottom;

    /**
     * @var string
     */
    public $leaveTime;

    /**
     * @var int
     */
    public $plateTop;

    /**
     * @var int
     */
    public $objBottom;

    /**
     * @var int
     */
    public $plateRight;

    /**
     * @var string
     */
    public $origImage;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $vehiclePlate;

    /**
     * @var string
     */
    public $entryTime;

    /**
     * @var string
     */
    public $imageId;
    protected $_name = [
        'cameraId'     => 'CameraId',
        'objRight'     => 'ObjRight',
        'objType'      => 'ObjType',
        'feature'      => 'Feature',
        'plateLeft'    => 'PlateLeft',
        'objLeft'      => 'ObjLeft',
        'score'        => 'Score',
        'cropImage'    => 'CropImage',
        'objTop'       => 'ObjTop',
        'label'        => 'Label',
        'plateBottom'  => 'PlateBottom',
        'leaveTime'    => 'LeaveTime',
        'plateTop'     => 'PlateTop',
        'objBottom'    => 'ObjBottom',
        'plateRight'   => 'PlateRight',
        'origImage'    => 'OrigImage',
        'timeStamp'    => 'TimeStamp',
        'vehiclePlate' => 'VehiclePlate',
        'entryTime'    => 'EntryTime',
        'imageId'      => 'ImageId',
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
        if (null !== $this->objRight) {
            $res['ObjRight'] = $this->objRight;
        }
        if (null !== $this->objType) {
            $res['ObjType'] = $this->objType;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->plateLeft) {
            $res['PlateLeft'] = $this->plateLeft;
        }
        if (null !== $this->objLeft) {
            $res['ObjLeft'] = $this->objLeft;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->cropImage) {
            $res['CropImage'] = $this->cropImage;
        }
        if (null !== $this->objTop) {
            $res['ObjTop'] = $this->objTop;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->plateBottom) {
            $res['PlateBottom'] = $this->plateBottom;
        }
        if (null !== $this->leaveTime) {
            $res['LeaveTime'] = $this->leaveTime;
        }
        if (null !== $this->plateTop) {
            $res['PlateTop'] = $this->plateTop;
        }
        if (null !== $this->objBottom) {
            $res['ObjBottom'] = $this->objBottom;
        }
        if (null !== $this->plateRight) {
            $res['PlateRight'] = $this->plateRight;
        }
        if (null !== $this->origImage) {
            $res['OrigImage'] = $this->origImage;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->vehiclePlate) {
            $res['VehiclePlate'] = $this->vehiclePlate;
        }
        if (null !== $this->entryTime) {
            $res['EntryTime'] = $this->entryTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CameraId'])) {
            $model->cameraId = $map['CameraId'];
        }
        if (isset($map['ObjRight'])) {
            $model->objRight = $map['ObjRight'];
        }
        if (isset($map['ObjType'])) {
            $model->objType = $map['ObjType'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['PlateLeft'])) {
            $model->plateLeft = $map['PlateLeft'];
        }
        if (isset($map['ObjLeft'])) {
            $model->objLeft = $map['ObjLeft'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['CropImage'])) {
            $model->cropImage = $map['CropImage'];
        }
        if (isset($map['ObjTop'])) {
            $model->objTop = $map['ObjTop'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['PlateBottom'])) {
            $model->plateBottom = $map['PlateBottom'];
        }
        if (isset($map['LeaveTime'])) {
            $model->leaveTime = $map['LeaveTime'];
        }
        if (isset($map['PlateTop'])) {
            $model->plateTop = $map['PlateTop'];
        }
        if (isset($map['ObjBottom'])) {
            $model->objBottom = $map['ObjBottom'];
        }
        if (isset($map['PlateRight'])) {
            $model->plateRight = $map['PlateRight'];
        }
        if (isset($map['OrigImage'])) {
            $model->origImage = $map['OrigImage'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['VehiclePlate'])) {
            $model->vehiclePlate = $map['VehiclePlate'];
        }
        if (isset($map['EntryTime'])) {
            $model->entryTime = $map['EntryTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        return $model;
    }
}
