<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetectImageBodiesRequest extends Model
{
    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var float
     */
    public $sensitivity;

    /**
     * @var string
     */
    public $sourceURI;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'projectName'      => 'ProjectName',
        'sensitivity'      => 'Sensitivity',
        'sourceURI'        => 'SourceURI',
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
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sensitivity) {
            $res['Sensitivity'] = $this->sensitivity;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageBodiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Sensitivity'])) {
            $model->sensitivity = $map['Sensitivity'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }

        return $model;
    }
}
