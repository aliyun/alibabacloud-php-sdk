<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest\targets;
use AlibabaCloud\Tea\Model;

class AddImageMosaicRequest extends Model
{
    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

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
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'imageFormat'      => 'ImageFormat',
        'projectName'      => 'ProjectName',
        'quality'          => 'Quality',
        'sourceURI'        => 'SourceURI',
        'targetURI'        => 'TargetURI',
        'targets'          => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
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
        if (null !== $this->targets) {
            $res['Targets'] = [];
            if (null !== $this->targets && \is_array($this->targets)) {
                $n = 0;
                foreach ($this->targets as $item) {
                    $res['Targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageMosaicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
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
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n              = 0;
                foreach ($map['Targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
