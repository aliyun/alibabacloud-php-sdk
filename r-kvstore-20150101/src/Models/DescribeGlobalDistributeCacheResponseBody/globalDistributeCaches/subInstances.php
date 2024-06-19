<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponseBody\globalDistributeCaches;

use AlibabaCloud\Tea\Model;

class subInstances extends Model
{
    /**
     * @description The ID of the distributed instance.
     *
     * @example gr-bp14rkqrhac****
     *
     * @var string
     */
    public $globalInstanceId;

    /**
     * @description The instance type of the child instance. For more information, see the following topics:
     *
     *   [Standard DRAM-based instances](https://help.aliyun.com/document_detail/145228.html)
     *   [Cluster DRAM-based instances](https://help.aliyun.com/document_detail/150458.html)
     *   [Read/write splitting DRAM-based instances](https://help.aliyun.com/document_detail/150459.html)
     *
     * @example redis.amber.logic.sharding.2g.2db.0rodb.6proxy.multithread
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the child instance.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The state of the child instance. Valid values:
     *
     *   **Normal**: The instance is normal.
     *   **Creating**: The instance is being created.
     *   **Changing**: The configurations of the instance are being changed.
     *   **Inactive**: The instance is disabled.
     *   **Flushing**: The instance is being released.
     *   **Released**: The instance is released.
     *   **Transforming**: The billing method of the instance is changing.
     *   **Unavailable**: The instance is suspended.
     *   **Error**: The instance failed to be created.
     *   **Migrating**: The instance is being migrated.
     *   **BackupRecovering**: The instance is being restored from a backup.
     *   **MinorVersionUpgrading**: The minor version of the instance is being updated.
     *   **NetworkModifying**: The network type of the instance is being changed.
     *   **SSLModifying**: The SSL certificate of the instance is being changed.
     *   **MajorVersionUpgrading**: The major version of the instance is being upgraded. The instance remains available during the upgrade.
     *
     * >  For more information about instance states, see [Instance states and impacts](https://help.aliyun.com/document_detail/200740.html).
     * @example Normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'globalInstanceId' => 'GlobalInstanceId',
        'instanceClass'    => 'InstanceClass',
        'instanceID'       => 'InstanceID',
        'instanceStatus'   => 'InstanceStatus',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalInstanceId) {
            $res['GlobalInstanceId'] = $this->globalInstanceId;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalInstanceId'])) {
            $model->globalInstanceId = $map['GlobalInstanceId'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
