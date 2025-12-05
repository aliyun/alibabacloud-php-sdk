<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretShrinkRequest\extendedConfig;

class UpdateSecretShrinkRequest extends Model
{
    /**
     * @var extendedConfig
     */
    public $extendedConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $secretName;
    protected $_name = [
        'extendedConfig' => 'ExtendedConfig',
        'description' => 'Description',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
        if (null !== $this->extendedConfig) {
            $this->extendedConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendedConfig) {
            $res['ExtendedConfig'] = null !== $this->extendedConfig ? $this->extendedConfig->toArray($noStream) : $this->extendedConfig;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
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
        if (isset($map['ExtendedConfig'])) {
            $model->extendedConfig = extendedConfig::fromMap($map['ExtendedConfig']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
