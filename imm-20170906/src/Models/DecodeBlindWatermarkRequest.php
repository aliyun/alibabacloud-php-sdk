<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class DecodeBlindWatermarkRequest extends Model
{
    /**
     * @var int
     */
    public $imageQuality;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $originalImageUri;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $targetUri;
    protected $_name = [
        'imageQuality'     => 'ImageQuality',
        'imageUri'         => 'ImageUri',
        'model'            => 'Model',
        'originalImageUri' => 'OriginalImageUri',
        'project'          => 'Project',
        'targetUri'        => 'TargetUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageQuality) {
            $res['ImageQuality'] = $this->imageQuality;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->originalImageUri) {
            $res['OriginalImageUri'] = $this->originalImageUri;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->targetUri) {
            $res['TargetUri'] = $this->targetUri;
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
        if (isset($map['ImageQuality'])) {
            $model->imageQuality = $map['ImageQuality'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['OriginalImageUri'])) {
            $model->originalImageUri = $map['OriginalImageUri'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['TargetUri'])) {
            $model->targetUri = $map['TargetUri'];
        }

        return $model;
    }
}
