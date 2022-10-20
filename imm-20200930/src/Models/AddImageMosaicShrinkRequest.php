<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AddImageMosaicShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @var string
     */
    public $imageFormat;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $quality;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var string
     */
    public $targetURI;

    /**
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
