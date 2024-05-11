<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDecodeBlindWatermarkTaskRequest extends Model
{
    /**
     * @example 90
     *
     * @var int
     */
    public $imageQuality;

    /**
     * @example FFT
     *
     * @var string
     */
    public $model;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @example oss://imm-test/testcases/watermarktestbefore.jpg
     *
     * @var string
     */
    public $originalImageURI;

    /**
     * @description This parameter is required.
     *
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description This parameter is required.
     *
     * @example oss://target/sampleobject.jpg
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @example low
     *
     * @var string
     */
    public $strengthLevel;

    /**
     * @example oss://target/targetobject.jpg
     *
     * @var string
     */
    public $targetURI;

    /**
     * @example text
     *
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'imageQuality'     => 'ImageQuality',
        'model'            => 'Model',
        'notification'     => 'Notification',
        'originalImageURI' => 'OriginalImageURI',
        'projectName'      => 'ProjectName',
        'sourceURI'        => 'SourceURI',
        'strengthLevel'    => 'StrengthLevel',
        'targetURI'        => 'TargetURI',
        'watermarkType'    => 'WatermarkType',
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
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return CreateDecodeBlindWatermarkTaskRequest
     */
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
            $model->notification = Notification::fromMap($map['Notification']);
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
