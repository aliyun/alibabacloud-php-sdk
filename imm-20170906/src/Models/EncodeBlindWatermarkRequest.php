<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class EncodeBlindWatermarkRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
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
    public $project;

    /**
     * @var string
     */
    public $targetImageType;

    /**
     * @var string
     */
    public $targetUri;

    /**
     * @var string
     */
    public $watermarkUri;
    protected $_name = [
        'content'         => 'Content',
        'imageQuality'    => 'ImageQuality',
        'imageUri'        => 'ImageUri',
        'model'           => 'Model',
        'project'         => 'Project',
        'targetImageType' => 'TargetImageType',
        'targetUri'       => 'TargetUri',
        'watermarkUri'    => 'WatermarkUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->imageQuality) {
            $res['ImageQuality'] = $this->imageQuality;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->targetImageType) {
            $res['TargetImageType'] = $this->targetImageType;
        }
        if (null !== $this->targetUri) {
            $res['TargetUri'] = $this->targetUri;
        }
        if (null !== $this->watermarkUri) {
            $res['WatermarkUri'] = $this->watermarkUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncodeBlindWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ImageQuality'])) {
            $model->imageQuality = $map['ImageQuality'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['TargetImageType'])) {
            $model->targetImageType = $map['TargetImageType'];
        }
        if (isset($map['TargetUri'])) {
            $model->targetUri = $map['TargetUri'];
        }
        if (isset($map['WatermarkUri'])) {
            $model->watermarkUri = $map['WatermarkUri'];
        }

        return $model;
    }
}
