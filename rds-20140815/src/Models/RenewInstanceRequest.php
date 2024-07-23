<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment during the renewal. Valid values:
     *
     *   **True**: enables automatic payment. Make sure that your Alibaba Cloud account has adequate balance.
     *   **False** (default): disables automatic payment. You have to manually pay the order in the console.
     *
     * >  For more information about how to manually pay the order in the console, see the following topics:
     *
     *   [Manually renew an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/96050.html)
     *
     *   [Manually renew an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96741.html)
     *
     *   [Manually renew an ApsaraDB RDS for SQL Server instance](https://help.aliyun.com/document_detail/95637.html)
     *
     *   [Manually renew an ApsaraDB RDS for MariaDB instance](https://help.aliyun.com/document_detail/97122.html)
     *
     * @example True
     *
     * @var string
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal for the instance. Valid values:
     *
     *   **true**.
     *   **false** (default)
     *
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the generated token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The instance ID You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The duration of the subscription renewal. Unit: month. Valid values:
     *
     *   **1~9**
     *   **12**
     *   **24**
     *   **36**
     *   **48**
     *   **60**
     *
     * This parameter is required.
     * @example 12
     *
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'autoRenew'            => 'AutoRenew',
        'clientToken'          => 'ClientToken',
        'DBInstanceId'         => 'DBInstanceId',
        'ownerId'              => 'OwnerId',
        'period'               => 'Period',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
     * @return RenewInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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
