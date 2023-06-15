<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceIPArrayListRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The network type of the IP address whitelist. Valid values:
     *
     *   **Classic**: classic network in enhanced whitelist mode
     *   **VPC**: virtual private cloud (VPC) in enhanced whitelist mode
     *   **MIX**: standard whitelist mode
     *
     * By default, this operation returns IP address whitelists of all network types.
     * @example VPC
     *
     * @var string
     */
    public $whitelistNetworkType;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'whitelistNetworkType' => 'WhitelistNetworkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->whitelistNetworkType) {
            $res['WhitelistNetworkType'] = $this->whitelistNetworkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceIPArrayListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['WhitelistNetworkType'])) {
            $model->whitelistNetworkType = $map['WhitelistNetworkType'];
        }

        return $model;
    }
}
