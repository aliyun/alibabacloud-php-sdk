<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterAttachScriptsRequest extends Model
{
    /**
     * @description The CPU architecture of the node. Valid values: `amd64`, `arm`, and `arm64`.
     *
     * Default value: `amd64`.
     *
     * >  This parameter is required if you want to add a node to an ACK Edge cluster.
     *
     * @example amd64
     *
     * @var string
     */
    public $arch;

    /**
     * @description The expiration time of the token that is generated. The value is a UNIX timestamp. For example, a value of 1739980800 indicates 00:00:00 (UTC+8) on February 20, 2025.
     *
     * @example 1740037333
     *
     * @var int
     */
    public $expired;

    /**
     * @description Specifies whether to mount data disks to an existing instance when you manually add this instance to the cluster. You can use data disks to store container data and images. Valid values:
     *
     *   `true`: mounts data disks to the instance that you want to add. After a data disk is mounted, the original data on the disk is erased. Back up data before you mount a data disk.
     *   `false`: does not mount data disks to the instance.
     *
     * Default value: `false`.
     *
     * How a data disk is mounted:
     *
     *   If the Elastic Compute Service (ECS) instances are already mounted with data disks and the file system of the last data disk is uninitialized, the system automatically formats this data disk to ext4 and uses the disk to store the data in the /var/lib/docker and /var/lib/kubelet directories.
     *   If no data disk is mounted to the ECS instance, the system does not purchase a new data disk.
     *
     * @example false
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description Specifies whether to retain the name of an existing instance when it is added to the cluster. If you do not retain the instance name, the instance is renamed in the `worker-k8s-for-cs-<clusterid>` format. Valid values:
     *
     *   `true`: retains the instance name.
     *   `false`: does not retain the instance name.
     *
     * Default value: `true`.
     *
     * @example true
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description The ID of the node pool to which you want to add an existing node.
     *
     * >  If you do not specify a node pool ID, the node is added to the default node pool.
     *
     * @example np1c9229d9be2d432c93f77a88fca0****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description The node configurations for the node that you want to add.
     *
     * >  This parameter is required if you want to add a node to an ACK Edge cluster.
     *
     * @example {\\"enableIptables\\": true,\\"manageRuntime\\": true,\\"quiet\\": true,\\"allowedClusterAddons\\": [\\"kube-proxy\\",\\"flannel\\",\\"coredns\\"]}
     *
     * @var string
     */
    public $options;

    /**
     * @description A list of ApsaraDB RDS instances. ECS instances in the cluster are automatically added to the whitelist of the ApsaraDB RDS instances.
     *
     * @var string[]
     */
    public $rdsInstances;
    protected $_name = [
        'arch' => 'arch',
        'expired' => 'expired',
        'formatDisk' => 'format_disk',
        'keepInstanceName' => 'keep_instance_name',
        'nodepoolId' => 'nodepool_id',
        'options' => 'options',
        'rdsInstances' => 'rds_instances',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->arch) {
            $res['arch'] = $this->arch;
        }
        if (null !== $this->expired) {
            $res['expired'] = $this->expired;
        }
        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }
        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->options) {
            $res['options'] = $this->options;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAttachScriptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arch'])) {
            $model->arch = $map['arch'];
        }
        if (isset($map['expired'])) {
            $model->expired = $map['expired'];
        }
        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }
        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['options'])) {
            $model->options = $map['options'];
        }
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }

        return $model;
    }
}
