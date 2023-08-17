<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class AllocateClusterPublicConnectionRequest extends Model
{
    /**
     * @description The prefix of the public endpoint.
     *
     *   The prefix must contain lowercase letters, digits, and hyphens (-). It must start with a lowercase letter.
     *   The prefix can be up to 30 characters in length.
     *   By default, the cluster name is used as the prefix of the public endpoint.
     *
     * @example am-bp278jg9****.ads.aliyuncs.com
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * You can call the [DescribeDBClusters](~~129857~~) operation to query the cluster IDs of all AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a specific region.
     * @example am-bp278jg9****
     *
     * @var string
     */
    public $DBClusterId;

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
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'DBClusterId'            => 'DBClusterId',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
     * @return AllocateClusterPublicConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
