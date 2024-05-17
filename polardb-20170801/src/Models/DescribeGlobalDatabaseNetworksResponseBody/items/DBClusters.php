<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBClusters extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The role of the cluster. Valid values:
     *
     *   **Primary**: the primary cluster
     *   **standby**: the secondary cluster
     *
     * > A GDN consists of one primary cluster and up to four secondary clusters. For more information, see [GDN](https://help.aliyun.com/document_detail/160381.html).
     * @example primary
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'regionId'    => 'RegionId',
        'role'        => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
