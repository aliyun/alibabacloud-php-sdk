<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetTokenVaultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetTokenVaultResponseBody\tokenVault\encryptionConfig;

class tokenVault extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var encryptionConfig
     */
    public $encryptionConfig;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $tokenVaultArn;

    /**
     * @var string
     */
    public $tokenVaultName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'encryptionConfig' => 'EncryptionConfig',
        'roleArn' => 'RoleArn',
        'tokenVaultArn' => 'TokenVaultArn',
        'tokenVaultName' => 'TokenVaultName',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encryptionConfig) {
            $res['EncryptionConfig'] = null !== $this->encryptionConfig ? $this->encryptionConfig->toArray($noStream) : $this->encryptionConfig;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->tokenVaultArn) {
            $res['TokenVaultArn'] = $this->tokenVaultArn;
        }

        if (null !== $this->tokenVaultName) {
            $res['TokenVaultName'] = $this->tokenVaultName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EncryptionConfig'])) {
            $model->encryptionConfig = encryptionConfig::fromMap($map['EncryptionConfig']);
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['TokenVaultArn'])) {
            $model->tokenVaultArn = $map['TokenVaultArn'];
        }

        if (isset($map['TokenVaultName'])) {
            $model->tokenVaultName = $map['TokenVaultName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
