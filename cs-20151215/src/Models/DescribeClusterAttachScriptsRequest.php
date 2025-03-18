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
     * >  This parameter is required if you want to add the existing node to a Container Service for Kubernetes (ACK) Edge cluster.
     *
     * @example amd64
     *
     * @var string
     */
    public $arch;

    /**
     * @description Describes the expiration time of the generated token, formatted as a Unix timestamp. For example, 1739980800 represents 2025-02-20 00:00:00.
     *
     * @example 1740037333
     *
     * @var int
     */
    public $expired;

    /**
     * @description Specifies whether to mount data disks to an existing instance when you manually add this instance to the cluster. You can add data disks to store container data and images. Valid values:
     *
     *   `true`: mounts data disks to the existing instance. Back up the data first to prevent losses.
     *   `false`: does not mount data disks to the existing instance.
     *
     * Default value: `false`.
     *
     * Mounting rules:
     *
     *   If the Elastic Compute Service (ECS) instances are already mounted with data disks and the file system of the last data disk is uninitialized, the system automatically formats this data disk to ext4 and mounts it to /var/lib/docker and /var/lib/kubelet.
     *   If no data disk is mounted to the ECS instance, no new disk will be mounted.
     *
     * @example false
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description Specifies whether to retain the name of the existing instance when it is added to the cluster. ``Valid values:
     *
     *   `true`: retains the instance name.
     *   `false`: renames the instance to worker-k8s-for-cs-\\<clusterid>.
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
     * >  If not specified, the node is added to the default node pool.
     *
     * @example np1c9229d9be2d432c93f77a88fca0****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description The node configurations for the existing instance that you want to add as a node.
     *
     * >  This parameter is required if you want to add the existing node to an ACK Edge cluster.
     *
     * @example {\\"enableIptables\\": true,\\"manageRuntime\\": true,\\"quiet\\": true,\\"allowedClusterAddons\\": [\\"kube-proxy\\",\\"flannel\\",\\"coredns\\"]}
     *
     * @var string
     */
    public $options;

    /**
     * @description If you specify a list of ApsaraDB RDS instances, ECS instances in the cluster will be automatically added to the whitelist of the ApsaraDB RDS instances.
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
