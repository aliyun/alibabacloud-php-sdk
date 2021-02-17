<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class DecodeBlindWatermarkRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $originalImageUri;

    /**
     * @var string
     */
    public $targetUri;

    /**
     * @var int
     */
    public $imageQuality;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'project'          => 'Project',
        'imageUri'         => 'ImageUri',
        'originalImageUri' => 'OriginalImageUri',
        'targetUri'        => 'TargetUri',
        'imageQuality'     => 'ImageQuality',
        'model'            => 'Model',
        'watermarkType'    => 'WatermarkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->originalImageUri) {
            $res['OriginalImageUri'] = $this->originalImageUri;
        }
        if (null !== $this->targetUri) {
            $res['TargetUri'] = $this->targetUri;
        }
        if (null !== $this->imageQuality) {
            $res['ImageQuality'] = $this->imageQuality;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecodeBlindWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['OriginalImageUri'])) {
            $model->originalImageUri = $map['OriginalImageUri'];
        }
        if (isset($map['TargetUri'])) {
            $model->targetUri = $map['TargetUri'];
        }
        if (isset($map['ImageQuality'])) {
            $model->imageQuality = $map['ImageQuality'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }

        return $model;
    }
}
