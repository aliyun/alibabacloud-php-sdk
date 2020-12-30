<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListSafetyHelmetResultsResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $cameraId;

    /**
     * @var string
     */
    public $objType;

    /**
     * @var int
     */
    public $objRight;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var int
     */
    public $objLeft;

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
     * @var string
     */
    public $leaveTime;

    /**
     * @var int
     */
    public $objBottom;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $origImage;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $entryTime;
    protected $_name = [
        'cameraId'  => 'CameraId',
        'objType'   => 'ObjType',
        'objRight'  => 'ObjRight',
        'feature'   => 'Feature',
        'objLeft'   => 'ObjLeft',
        'cropImage' => 'CropImage',
        'objTop'    => 'ObjTop',
        'label'     => 'Label',
        'leaveTime' => 'LeaveTime',
        'objBottom' => 'ObjBottom',
        'timeStamp' => 'TimeStamp',
        'origImage' => 'OrigImage',
        'imageId'   => 'ImageId',
        'entryTime' => 'EntryTime',
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
        if (null !== $this->objType) {
            $res['ObjType'] = $this->objType;
        }
        if (null !== $this->objRight) {
            $res['ObjRight'] = $this->objRight;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->objLeft) {
            $res['ObjLeft'] = $this->objLeft;
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
        if (null !== $this->leaveTime) {
            $res['LeaveTime'] = $this->leaveTime;
        }
        if (null !== $this->objBottom) {
            $res['ObjBottom'] = $this->objBottom;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->origImage) {
            $res['OrigImage'] = $this->origImage;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->entryTime) {
            $res['EntryTime'] = $this->entryTime;
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
        if (isset($map['ObjType'])) {
            $model->objType = $map['ObjType'];
        }
        if (isset($map['ObjRight'])) {
            $model->objRight = $map['ObjRight'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['ObjLeft'])) {
            $model->objLeft = $map['ObjLeft'];
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
        if (isset($map['LeaveTime'])) {
            $model->leaveTime = $map['LeaveTime'];
        }
        if (isset($map['ObjBottom'])) {
            $model->objBottom = $map['ObjBottom'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['OrigImage'])) {
            $model->origImage = $map['OrigImage'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['EntryTime'])) {
            $model->entryTime = $map['EntryTime'];
        }

        return $model;
    }
}
