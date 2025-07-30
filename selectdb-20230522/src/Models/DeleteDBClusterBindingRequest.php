<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class DeleteDBClusterBindingRequest extends Model
{
    /**
     * @description The ID of Cluster 1.
     *
     * This parameter is required.
     *
     * @example selectdb-cn-7213cjv2ez-be
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of Cluster 2.
     *
     * This parameter is required.
     *
     * @example selectdb-xxxb9f2w-be
     *
     * @var string
     */
    public $DBClusterIdBak;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example selectdb-cn-7213cjv2ez
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'DBClusterIdBak' => 'DBClusterIdBak',
        'DBInstanceId' => 'DBInstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBClusterIdBak) {
            $res['DBClusterIdBak'] = $this->DBClusterIdBak;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDBClusterBindingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBClusterIdBak'])) {
            $model->DBClusterIdBak = $map['DBClusterIdBak'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
