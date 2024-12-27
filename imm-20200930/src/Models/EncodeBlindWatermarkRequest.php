<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class EncodeBlindWatermarkRequest extends Model
{
    /**
     * @description The text content of watermarks. It can be up to 256 characters in length.
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter takes effect only if the input image format is JPG.
     *
     * The storage quality of the output image that carries the watermarks. Default value: 90. Valid values: 70 to 100. The higher the quality, the larger the image size and the higher the watermark resolution quality.
     * @example 90
     *
     * @var int
     */
    public $imageQuality;

    /**
     * @description The name of the project. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The Object Storage Service (OSS) URI of the image.
     *
     * This parameter is required.
     * @example oss://test-bucket/test-object.jpg
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description The watermark strength level. The higher the strength, the more resistant the watermarked image is to attacks, but the more the image is distorted. Default value: low. Valid values: [low, medium, high].
     *
     * @example low
     *
     * @var string
     */
    public $strengthLevel;

    /**
     * @description The URI of the output image in OSS.
     *
     * >
     *
     *   The format of the output image is the same as that of the input image.
     *
     * This parameter is required.
     * @example oss://test-bucket/target-object.jpg
     *
     * @var string
     */
    public $targetURI;
    protected $_name = [
        'content'       => 'Content',
        'imageQuality'  => 'ImageQuality',
        'projectName'   => 'ProjectName',
        'sourceURI'     => 'SourceURI',
        'strengthLevel' => 'StrengthLevel',
        'targetURI'     => 'TargetURI',
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

        return $model;
    }
}
