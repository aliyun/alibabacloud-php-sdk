<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AddImageMosaicShrinkRequest extends Model
{
    /**
     * @description **If you do not have special requirements, leave this parameter empty.**
     *
     * The configurations of authorization chains. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @description The encoding of the output image. By default, the output image uses the same encoding as the input image. Valid values: jpg, png, and webp.
     *
     * @example jpg
     *
     * @var string
     */
    public $imageFormat;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The quality of the output image. This parameter applies only to JPG and WebP images. Valid values: 0 to 100. Default value: 80.
     *
     * @example 80
     *
     * @var int
     */
    public $quality;

    /**
     * @description The OSS URI of the input image.
     *
     * This parameter is required.
     * @example oss://examplebucket/sampleobject.jpg
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description The OSS URI of the output image.
     *
     * This parameter is required.
     * @example oss://examplebucket/outputImage.jpg
     *
     * @var string
     */
    public $targetURI;

    /**
     * @description The bounding boxes and processing parameters.
     *
     * This parameter is required.
     * @var string
     */
    public $targetsShrink;
    protected $_name = [
        'credentialConfigShrink' => 'CredentialConfig',
        'imageFormat'            => 'ImageFormat',
        'projectName'            => 'ProjectName',
        'quality'                => 'Quality',
        'sourceURI'              => 'SourceURI',
        'targetURI'              => 'TargetURI',
        'targetsShrink'          => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->imageFormat) {
            $res['ImageFormat'] = $this->imageFormat;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }
        if (null !== $this->targetsShrink) {
            $res['Targets'] = $this->targetsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageMosaicShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['ImageFormat'])) {
            $model->imageFormat = $map['ImageFormat'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['TargetURI'])) {
            $model->targetURI = $map['TargetURI'];
        }
        if (isset($map['Targets'])) {
            $model->targetsShrink = $map['Targets'];
        }

        return $model;
    }
}
