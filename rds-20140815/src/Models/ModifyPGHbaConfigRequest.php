<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyPGHbaConfigRequest\hbaItem;
use AlibabaCloud\Tea\Model;

class ModifyPGHbaConfigRequest extends Model
{
    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](~~610396~~) operation to query the ID of the instance.
     *
     * @example pgm-bp1lymyn1v3i****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description An array that consists of the details of the AD domain services.
     *
     * @var hbaItem[]
     */
    public $hbaItem;

    /**
     * @description The method that you use to modify the pg_hba.conf file. Valid values:
     *
     *   **add**: adds one or more records. If you use this method, make sure that the value of the PriorityId parameter for each new record is different from the value of the PriorityId parameter for any existing record.
     *   **delete**: deletes one or more records. If you use this method, the record that corresponds to the specified value of the **PriorityId** parameter is deleted from the pg_hba.conf file.
     *   **modify**: modifies one or more records. If you use this method, the record that corresponds to the specified value of the **PriorityId** parameter is modified.
     *   **update**: overwrites the existing configuration in the pg_hba.conf file by using the new configuration.
     *
     * @example add
     *
     * @var string
     */
    public $opsType;

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
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'DBInstanceId'         => 'DBInstanceId',
        'hbaItem'              => 'HbaItem',
        'opsType'              => 'OpsType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->hbaItem) {
            $res['HbaItem'] = [];
            if (null !== $this->hbaItem && \is_array($this->hbaItem)) {
                $n = 0;
                foreach ($this->hbaItem as $item) {
                    $res['HbaItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->opsType) {
            $res['OpsType'] = $this->opsType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPGHbaConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['HbaItem'])) {
            if (!empty($map['HbaItem'])) {
                $model->hbaItem = [];
                $n              = 0;
                foreach ($map['HbaItem'] as $item) {
                    $model->hbaItem[$n++] = null !== $item ? hbaItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OpsType'])) {
            $model->opsType = $map['OpsType'];
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

        return $model;
    }
}
