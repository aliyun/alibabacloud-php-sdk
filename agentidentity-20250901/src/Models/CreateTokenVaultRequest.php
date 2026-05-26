<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class CreateTokenVaultRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var EncryptionConfig
     */
    public $encryptionConfig;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $tokenVaultName;
    protected $_name = [
        'description' => 'Description',
        'encryptionConfig' => 'EncryptionConfig',
        'roleArn' => 'RoleArn',
        'tokenVaultName' => 'TokenVaultName',
    ];

    public function validate()
    {
        if (null !== $this->encryptionConfig) {
            $this->encryptionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encryptionConfig) {
            $res['EncryptionConfig'] = null !== $this->encryptionConfig ? $this->encryptionConfig->toArray($noStream) : $this->encryptionConfig;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->tokenVaultName) {
            $res['TokenVaultName'] = $this->tokenVaultName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EncryptionConfig'])) {
            $model->encryptionConfig = EncryptionConfig::fromMap($map['EncryptionConfig']);
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['TokenVaultName'])) {
            $model->tokenVaultName = $map['TokenVaultName'];
        }

        return $model;
    }
}
