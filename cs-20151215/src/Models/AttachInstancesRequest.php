<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class AttachInstancesRequest extends Model
{
    /**
     * @description The CPU management policy. The following policies are supported if the Kubernetes version of the cluster is 1.12.6 or later.
     *
     *   `static`: This policy allows pods with specific resource characteristics on the node to be configured with enhanced CPU affinity and exclusivity.
     *   `none`: The default CPU affinity is used.
     *
     * >  This parameter is not supported if you specify the `nodepool_id` parameter.
     * @example none
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description Specifies whether to store container data and images on data disks. Valid values:
     *
     *   `true`: stores container data and images on data disks.
     *   `false`: does not store container data or images on data disks.
     *
     * How a data disk is mounted:
     *
     *   If the ECS instances are already mounted with data disks and the file system of the last data disk is not initialized, the system automatically formats this data disk to ext4 and mounts it to /var/lib/docker and /var/lib/kubelet.
     *   If no data disk is attached to the ECS instances, the system does not purchase a new data disk.
     *
     * >  If you choose to store container data and images on data disks and a data disk is already mounted to the ECS instance, the original data on this data disk will be cleared. You can back up the disk to avoid data loss.
     * @example false
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description The ID of the custom image. If you do not set this parameter, the default system image is used.
     *
     * >
     *
     *   If you specify a custom image, the custom image is used to deploy the operating systems on the system disks of the nodes.
     *
     *   This parameter is not supported after you specify `nodepool_id`.
     *
     * @example aliyun_2_1903_x64_20G_alibase_20200529.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ECS instances to be added.
     *
     * @var string[]
     */
    public $instances;

    /**
     * @description Specifies whether the nodes that you want to add are Edge Node Service (ENS) nodes. Valid values:
     *
     *   `true`: The nodes that you want to add are ENS nodes.
     *   `false`: The nodes that you want to add are not ENS nodes.
     *
     * >  If the nodes that you want to add are ENS nodes, you must set this parameter to `true`. This allows you to identify these nodes.
     * @example false
     *
     * @var bool
     */
    public $isEdgeWorker;

    /**
     * @description Specifies whether to retain the instance name. Valid values:
     *
     *   `true`: retains the instance name.
     *   `false`: does not retain the instance name.
     *
     * Default value: `true`
     * @example true
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description The name of the key pair that is used to log on to the ECS instances. You must set key_pair or `login_password`.
     *
     * >  This parameter is not supported if you specify the `nodepool_id` parameter.
     * @example secrity-key
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description The node pool ID. If you do not set this parameter, the nodes are added to the default node pool.
     *
     * @example np615c0e0966124216a0412e10afe0****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description The SSH logon password that is used to log on to the ECS instances. You must set login_password or `key_pair`. The password must be 8 to 30 characters in length, and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. It cannot contain backslashes (\\) or double quotation marks (").
     *
     * For security considerations, the password is encrypted during data transfer.
     * @example Hello1234
     *
     * @var string
     */
    public $password;

    /**
     * @description A list of ApsaraDB RDS instances.
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description The container runtime.
     *
     * >  This parameter is not supported if you specify the `nodepool_id` parameter.
     * @var Runtime
     */
    public $runtime;

    /**
     * @description The labels that you want to add to nodes. You must add labels based on the following rules:
     *
     *   Each label is a case-sensitive key-value pair. You can add up to 20 labels.
     *   A key must be unique and cannot exceed 64 characters in length. A value can be empty and cannot exceed 128 characters in length. Keys and values cannot start with `aliyun`, `acs:`, `https://`, or `http://`. For more information, see [Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set).
     *
     * >  This parameter is not supported if you specify the `nodepool_id` parameter.
     * @var Tag[]
     */
    public $tags;

    /**
     * @description User-defined data. For more information, see [Generate user data](~~49121~~).
     *
     * >  This parameter is not supported if you specify the `nodepool_id` parameter.
     * @example IyEvdXNyL2Jpbi9iYXNoCmVjaG8gIkhlbGxvIEFDSyEi
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'cpuPolicy'        => 'cpu_policy',
        'formatDisk'       => 'format_disk',
        'imageId'          => 'image_id',
        'instances'        => 'instances',
        'isEdgeWorker'     => 'is_edge_worker',
        'keepInstanceName' => 'keep_instance_name',
        'keyPair'          => 'key_pair',
        'nodepoolId'       => 'nodepool_id',
        'password'         => 'password',
        'rdsInstances'     => 'rds_instances',
        'runtime'          => 'runtime',
        'tags'             => 'tags',
        'userData'         => 'user_data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
        }
        if (null !== $this->isEdgeWorker) {
            $res['is_edge_worker'] = $this->isEdgeWorker;
        }
        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = $map['instances'];
            }
        }
        if (isset($map['is_edge_worker'])) {
            $model->isEdgeWorker = $map['is_edge_worker'];
        }
        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['runtime'])) {
            $model->runtime = Runtime::fromMap($map['runtime']);
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }

        return $model;
    }
}
