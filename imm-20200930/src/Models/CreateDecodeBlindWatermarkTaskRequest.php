<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDecodeBlindWatermarkTaskRequest extends Model
{
    /**
     * @description The quality of the output image.
     * The higher the quality, the larger the image size and the higher the watermark resolution quality.
     * @example 90
     *
     * @var int
     */
    public $imageQuality;

    /**
     * @description The watermark algorithm model.Valid values: FFT, FFT_FULL, DWT, and DWT_IBG. Default value: FFT.
     *
     * If this parameter is left empty, the DecodeBlindWatermark operation is called. Otherwise, the CreateDecodeBlindWatermarkTask operation is called.
     * @example FFT
     *
     * @var string
     */
    public $model;

    /**
     * @description The notification settings. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html).
     *
     * @var Notification
     */
    public $notification;

    /**
     * @description The OSS URI of the image before the blind watermark is added.
     *
     * Specify the OSS URI in the `oss://<bucket>/<object>` format, where `<bucket>` is the name of the bucket in the same region as the current project and `<object>` is the path of the object with the extension included.
     * @example oss://imm-test/testcases/watermarktestbefore.jpg
     *
     * @var string
     */
    public $originalImageURI;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The OSS URI of the image.
     *
     * This parameter is required.
     * @example oss://target/sampleobject.jpg
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description The watermark strength level. The higher the strength level, the more resistant the watermarked image is to attacks, but the more the image is distorted. Valid values: low, medium, and high. Default value: low.
     *
     * @example low
     *
     * @var string
     */
    public $strengthLevel;

    /**
     * @description The OSS URI of the output image.
     * Specify the OSS URI in the `oss://<bucket>/<object>` format, where `<bucket>` is the name of the bucket in the same region as the current project and `<object>` is the path of the object with the extension included.
     * @example oss://target/targetobject.jpg
     *
     * @var string
     */
    public $targetURI;

    /**
     * @description The type of the watermark. Valid value: text.
     *
     * No image watermarks are supported.
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
