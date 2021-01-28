<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetDcdnConfigOfVersionRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $configId;

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
    public $functionArgs;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'ownerAccount'  => 'OwnerAccount',
        'securityToken' => 'SecurityToken',
        'versionId'     => 'VersionId',
        'configId'      => 'ConfigId',
        'functionId'    => 'FunctionId',
        'functionName'  => 'FunctionName',
        'functionArgs'  => 'FunctionArgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->functionId) {
            $res['FunctionId'] = $this->functionId;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->functionArgs) {
            $res['FunctionArgs'] = $this->functionArgs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDcdnConfigOfVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['FunctionId'])) {
            $model->functionId = $map['FunctionId'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['FunctionArgs'])) {
            $model->functionArgs = $map['FunctionArgs'];
        }

        return $model;
    }
}
