<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest\targets;

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
        'imageFormat' => 'ImageFormat',
        'projectName' => 'ProjectName',
        'quality' => 'Quality',
        'sourceURI' => 'SourceURI',
        'targetURI' => 'TargetURI',
        'targets' => 'Targets',
    ];

    public function validate()
    {
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
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
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1++] = targets::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
