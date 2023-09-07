<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\connections;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\DBClusters;
use AlibabaCloud\Tea\Model;

class DescribeGlobalDatabaseNetworkResponseBody extends Model
{
    /**
     * @description The information about the connection to the cluster.
     *
     * @var connections[]
     */
    public $connections;

    /**
     * @description The time at which the GDN was created.
     *
     * @example 2020-02-24T11:57:54Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the cluster.
     *
     * @example pc-bp1s826a1up******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The clusters that are included in the GDN.
     *
     * @var DBClusters[]
     */
    public $DBClusters;

    /**
     * @description The type of the database engine. Only MySQL is supported.
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine. Only version 8.0 is supported.
     *
     * @example 8.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The description of the GDN. The description must meet the following requirements:
     *
     *   It cannot start with `http://` or `https://`.
     *   It must start with a letter.
     *   It can contain letters, digits, underscores (\_), and hyphens (-).
     *   It must be 2 to 126 characters in length.
     *
     * @example GDN-fortest
     *
     * @var string
     */
    public $GDNDescription;

    /**
     * @description The ID of the GDN.
     *
     * @example gdn-bp1fttxsrmv*****
     *
     * @var string
     */
    public $GDNId;

    /**
     * @description The status of the GDN. Valid values:
     *
     *   **Creating**: The GDN is being created.
     *   **active**: The GDN is running.
     *   **deleting**: The GDN is being deleted.
     *   **locked**: The GDN is locked. If the GDN is locked, you cannot perform operations on clusters in the GDN.
     *   **removing_member**: The secondary cluster is being removed from the GDN.
     *
     * @example active
     *
     * @var string
     */
    public $GDNStatus;

    /**
     * @description The ID of the request.
     *
     * @example 67F2E75F-AE67-4FB2-821F-A81237EACD15
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-************
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'connections'     => 'Connections',
        'createTime'      => 'CreateTime',
        'DBClusterId'     => 'DBClusterId',
        'DBClusters'      => 'DBClusters',
        'DBType'          => 'DBType',
        'DBVersion'       => 'DBVersion',
        'GDNDescription'  => 'GDNDescription',
        'GDNId'           => 'GDNId',
        'GDNStatus'       => 'GDNStatus',
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connections) {
            $res['Connections'] = [];
            if (null !== $this->connections && \is_array($this->connections)) {
                $n = 0;
                foreach ($this->connections as $item) {
                    $res['Connections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBClusters) {
            $res['DBClusters'] = [];
            if (null !== $this->DBClusters && \is_array($this->DBClusters)) {
                $n = 0;
                foreach ($this->DBClusters as $item) {
                    $res['DBClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->GDNDescription) {
            $res['GDNDescription'] = $this->GDNDescription;
        }
        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
        }
        if (null !== $this->GDNStatus) {
            $res['GDNStatus'] = $this->GDNStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGlobalDatabaseNetworkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connections'])) {
            if (!empty($map['Connections'])) {
                $model->connections = [];
                $n                  = 0;
                foreach ($map['Connections'] as $item) {
                    $model->connections[$n++] = null !== $item ? connections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBClusters'])) {
            if (!empty($map['DBClusters'])) {
                $model->DBClusters = [];
                $n                 = 0;
                foreach ($map['DBClusters'] as $item) {
                    $model->DBClusters[$n++] = null !== $item ? DBClusters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['GDNDescription'])) {
            $model->GDNDescription = $map['GDNDescription'];
        }
        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
        }
        if (isset($map['GDNStatus'])) {
            $model->GDNStatus = $map['GDNStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
