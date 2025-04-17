<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateDecodeBlindWatermarkTaskShrinkRequest extends Model
{
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
    public $notificationShrink;

    /**
     * @var string
     */
    public $originalImageURI;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var string
     */
    public $strengthLevel;

    /**
     * @var string
     */
    public $targetURI;

    /**
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'imageQuality' => 'ImageQuality',
        'model' => 'Model',
        'notificationShrink' => 'Notification',
        'originalImageURI' => 'OriginalImageURI',
        'projectName' => 'ProjectName',
        'sourceURI' => 'SourceURI',
        'strengthLevel' => 'StrengthLevel',
        'targetURI' => 'TargetURI',
        'watermarkType' => 'WatermarkType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageQuality) {
            $res['ImageQuality'] = $this->imageQuality;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }

        if (null !== $this->originalImageURI) {
            $res['OriginalImageURI'] = $this->originalImageURI;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }

        if (null !== $this->strengthLevel) {
            $res['StrengthLevel'] = $this->strengthLevel;
        }

        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }

        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageQuality'])) {
            $model->imageQuality = $map['ImageQuality'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }

        if (isset($map['OriginalImageURI'])) {
            $model->originalImageURI = $map['OriginalImageURI'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }

        if (isset($map['StrengthLevel'])) {
            $model->strengthLevel = $map['StrengthLevel'];
        }

        if (isset($map['TargetURI'])) {
            $model->targetURI = $map['TargetURI'];
        }

        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }

        return $model;
    }
}
