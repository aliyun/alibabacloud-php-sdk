<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class AttachInstancesRequest extends Model
{
    /**
     * @description The CPU management policy of the node. The following policies are supported if the Kubernetes version of the cluster is 1.12.6 or later:
     *
     *   `static`: allows pods with specific resource characteristics on the node to be granted enhanced CPU affinity and exclusivity.
     *   `none`: uses default CPU affinity.
     *
     * >  This parameter is not supported if you specify `nodepool_id`.
     * @example none
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description Specifies whether to store container data and images on data disks. Valid value:
     *
     *   `true`: stores container data and images on data disks.
     *   `false`: does not store container data or images on data disks.
     *
     * How data disks are attached:
     *
     *   If the ECS instance is already attached with data disks and the file system of the last data disk is not initialized, the system automatically formats this data disk to ext4. Then, the system uses the disk to store the data in the /var/lib/docker and /var/lib/kubelet directories.
     *   If no data disk is attached to the ECS instance, the system does not purchase a new data disk.
     *
     * >  If you choose to store container data and images on data disks and a data disk is already attached to the ECS instance, the original data on this data disk is cleared. You can back up the disk to prevent data loss.
     * @example false
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description The custom image ID. If you do not specify this parameter, the default system image is used.
     *
     * >
     *
     *   If you specify a custom image, the custom image is used to deploy the operating system on the system disk of the node.
     *
     *   This parameter is not supported if you specify `nodepool_id`.
     *
     * @example aliyun_2_1903_x64_20G_alibase_20200529.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ECS instances that you want to add.
     *
     * This parameter is required.
     * @var string[]
     */
    public $instances;

    /**
     * @description Specifies whether the node that you want to add is an Edge Node Service (ENS) node. Valid value:
     *
     *   `true`: the node that you want to add is an ENS node.
     *   `false`: the node that you want to add is not an ENS node.
     *
     * >  If the node that you want to add is an ENS node, you must set the value to `true`. This allows you to identify the node.
     * @example false
     *
     * @var bool
     */
    public $isEdgeWorker;

    /**
     * @description Specifies whether to retain the instance name. Valid value:
     *
     *   `true`: retains the instance name.
     *   `false`: does not retain the instance name.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description The name of the key pair used to log on to the ECS instances. You must specify this parameter or `login_password`.
     *
     * >  This parameter is not supported if you specify `nodepool_id`.
     * @example secrity-key
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description The ID of the node pool to which the node is added. If you do not specify this parameter, the node is added to the default node pool.
     *
     * @example np615c0e0966124216a0412e10afe0****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description The SSH logon password used to log on to the ECS instances. You must specify this parameter or `key_pair`. The password must be 8 to 30 characters in length, and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. The password cannot contain backslashes (\\\\) or double quotation marks (").
     *
     * The password is encrypted during data transfer to ensure security.
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
     * >  This parameter is not supported if you specify `nodepool_id`.
     * @var Runtime
     */
    public $runtime;

    /**
     * @description The labels that you want to add to the node. When you add labels to a node, the following rules apply:
     *
     *   A label is a case-sensitive key-value pair. You can add up to 20 labels.
     *   The key must be unique and cannot exceed 64 characters in length. The value can be empty and cannot exceed 128 characters in length. Keys and values cannot start with `aliyun`, `acs:`, `https://`, or `http://`. For more information, see [Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set).
     *
     * >  This parameter is not supported if you specify `nodepool_id`.
     * @var Tag[]
     */
    public $tags;

    /**
     * @description The user-defined data on the node. For more information, see [Use instance user data to automatically run commands or scripts on instance startup](https://help.aliyun.com/document_detail/49121.html).
     *
     * >  This parameter is not supported if you specify `nodepool_id`.
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
