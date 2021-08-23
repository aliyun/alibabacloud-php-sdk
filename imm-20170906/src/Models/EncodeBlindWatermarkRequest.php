<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class EncodeBlindWatermarkRequest extends Model
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
    public $watermarkUri;

    /**
     * @var string
     */
    public $targetUri;

    /**
     * @var string
     */
    public $imageQuality;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $targetImageType;

    /**
     * @var string
     */
    public $model;
    protected $_name = [
        'project'         => 'Project',
        'imageUri'        => 'ImageUri',
        'watermarkUri'    => 'WatermarkUri',
        'targetUri'       => 'TargetUri',
        'imageQuality'    => 'ImageQuality',
        'content'         => 'Content',
        'targetImageType' => 'TargetImageType',
        'model'           => 'Model',
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
        if (null !== $this->watermarkUri) {
            $res['WatermarkUri'] = $this->watermarkUri;
        }
        if (null !== $this->targetUri) {
            $res['TargetUri'] = $this->targetUri;
        }
        if (null !== $this->imageQuality) {
            $res['ImageQuality'] = $this->imageQuality;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->targetImageType) {
            $res['TargetImageType'] = $this->targetImageType;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
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
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['WatermarkUri'])) {
            $model->watermarkUri = $map['WatermarkUri'];
        }
        if (isset($map['TargetUri'])) {
            $model->targetUri = $map['TargetUri'];
        }
        if (isset($map['ImageQuality'])) {
            $model->imageQuality = $map['ImageQuality'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['TargetImageType'])) {
            $model->targetImageType = $map['TargetImageType'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        return $model;
    }
}
