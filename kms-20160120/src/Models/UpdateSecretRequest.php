<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretRequest\extendedConfig;
use AlibabaCloud\Tea\Model;

class UpdateSecretRequest extends Model
{
    /**
     * @var extendedConfig
     */
    public $extendedConfig;

    /**
     * @description The description of the secret.
     *
     * @example datainfo
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the secret.
     *
     * This parameter is required.
     *
     * @example secret001
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'extendedConfig' => 'ExtendedConfig',
        'description' => 'Description',
        'secretName' => 'SecretName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->extendedConfig) {
            $res['ExtendedConfig'] = null !== $this->extendedConfig ? $this->extendedConfig->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecretRequest
     */
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
