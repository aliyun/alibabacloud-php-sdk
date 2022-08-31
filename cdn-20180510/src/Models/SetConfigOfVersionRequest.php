<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetConfigOfVersionRequest extends Model
{
    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $functionArgs;

    /**
     * @var int
     */
    public $functionId;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'configId'      => 'ConfigId',
        'functionArgs'  => 'FunctionArgs',
        'functionId'    => 'FunctionId',
        'functionName'  => 'FunctionName',
        'ownerAccount'  => 'OwnerAccount',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'versionId'     => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->functionArgs) {
            $res['FunctionArgs'] = $this->functionArgs;
        }
        if (null !== $this->functionId) {
            $res['FunctionId'] = $this->functionId;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetConfigOfVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['FunctionArgs'])) {
            $model->functionArgs = $map['FunctionArgs'];
        }
        if (isset($map['FunctionId'])) {
            $model->functionId = $map['FunctionId'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
