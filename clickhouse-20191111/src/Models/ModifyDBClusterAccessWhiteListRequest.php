<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterAccessWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $modifyMode;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'DBClusterIPArrayAttribute' => 'DBClusterIPArrayAttribute',
        'DBClusterIPArrayName' => 'DBClusterIPArrayName',
        'DBClusterId' => 'DBClusterId',
        'modifyMode' => 'ModifyMode',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityIps' => 'SecurityIps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterIPArrayAttribute) {
            $res['DBClusterIPArrayAttribute'] = $this->DBClusterIPArrayAttribute;
        }

        if (null !== $this->DBClusterIPArrayName) {
            $res['DBClusterIPArrayName'] = $this->DBClusterIPArrayName;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
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
        if (isset($map['DBClusterIPArrayAttribute'])) {
            $model->DBClusterIPArrayAttribute = $map['DBClusterIPArrayAttribute'];
        }

        if (isset($map['DBClusterIPArrayName'])) {
            $model->DBClusterIPArrayName = $map['DBClusterIPArrayName'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}
