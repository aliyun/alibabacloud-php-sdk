<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDasInstanceConfigRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the generated token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz*****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

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
     * @description Specifies whether to enable automatic storage expansion. Valid values:
     *
     *   **Enable**
     *   **Disable**
     *
     * @example Enable
     *
     * @var string
     */
    public $storageAutoScale;

    /**
     * @description The threshold in percentage based on which an automatic storage expansion is triggered. If the available storage reaches the threshold, ApsaraDB RDS increases the storage capacity of the instance. Valid values:
     *
     *   **10**
     *   **20**
     *   **30**
     *   **40**
     *   **50**
     *
     * >  If you set the **StorageAutoScale** parameter to **Enable**, you must specify this parameter.
     * @example 50
     *
     * @var int
     */
    public $storageThreshold;

    /**
     * @description The maximum storage capacity that is allowed by automatic storage expansion. The value of this parameter must be equal to or greater than the current storage capacity of the instance.
     *
     *   Valid value for instances with ESSDs: 32000. Unit: GB
     *   Valid value for instances with standard SSDs: 6000. Unit: GB
     *
     * > If you set the **StorageAutoScale** parameter to **Enable**, you must specify this parameter.
     * @example 1000
     *
     * @var int
     */
    public $storageUpperBound;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'DBInstanceId'         => 'DBInstanceId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'storageAutoScale'     => 'StorageAutoScale',
        'storageThreshold'     => 'StorageThreshold',
        'storageUpperBound'    => 'StorageUpperBound',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->storageAutoScale) {
            $res['StorageAutoScale'] = $this->storageAutoScale;
        }
        if (null !== $this->storageThreshold) {
            $res['StorageThreshold'] = $this->storageThreshold;
        }
        if (null !== $this->storageUpperBound) {
            $res['StorageUpperBound'] = $this->storageUpperBound;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDasInstanceConfigRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StorageAutoScale'])) {
            $model->storageAutoScale = $map['StorageAutoScale'];
        }
        if (isset($map['StorageThreshold'])) {
            $model->storageThreshold = $map['StorageThreshold'];
        }
        if (isset($map['StorageUpperBound'])) {
            $model->storageUpperBound = $map['StorageUpperBound'];
        }

        return $model;
    }
}
