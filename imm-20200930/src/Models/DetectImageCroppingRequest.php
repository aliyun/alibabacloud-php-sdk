<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DetectImageCroppingRequest extends Model
{
    /**
     * @var string
     */
    public $aspectRatios;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var string[]
     */
    public $inclusionHints;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sourceURI;
    protected $_name = [
        'aspectRatios' => 'AspectRatios',
        'credentialConfig' => 'CredentialConfig',
        'inclusionHints' => 'InclusionHints',
        'projectName' => 'ProjectName',
        'sourceURI' => 'SourceURI',
    ];

    public function validate()
    {
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (\is_array($this->inclusionHints)) {
            Model::validateArray($this->inclusionHints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aspectRatios) {
            $res['AspectRatios'] = $this->aspectRatios;
        }

        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->inclusionHints) {
            if (\is_array($this->inclusionHints)) {
                $res['InclusionHints'] = [];
                $n1 = 0;
                foreach ($this->inclusionHints as $item1) {
                    $res['InclusionHints'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
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
        if (isset($map['AspectRatios'])) {
            $model->aspectRatios = $map['AspectRatios'];
        }

        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }

        if (isset($map['InclusionHints'])) {
            if (!empty($map['InclusionHints'])) {
                $model->inclusionHints = [];
                $n1 = 0;
                foreach ($map['InclusionHints'] as $item1) {
                    $model->inclusionHints[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }

        return $model;
    }
}
