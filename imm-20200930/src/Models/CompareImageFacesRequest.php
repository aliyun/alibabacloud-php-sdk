<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CompareImageFacesRequest\source;

class CompareImageFacesRequest extends Model
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
     * @var source
     */
    public $source;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'projectName' => 'ProjectName',
        'source' => 'Source',
    ];

    public function validate()
    {
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }

        return $model;
    }
}
