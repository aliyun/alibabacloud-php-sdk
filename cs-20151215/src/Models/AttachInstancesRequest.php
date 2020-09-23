<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesRequest\runtime;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesRequest\tags;
use AlibabaCloud\Tea\Model;

class AttachInstancesRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 待添加的实例列表。
     *
     * @var string[]
     */
    public $instances;

    /**
     * @description 容器运行时。
     *
     * @var runtime
     */
    public $runtime;

    /**
     * @description 自定义镜像ID。
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 是否格式化数据盘。
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description 是否保留实例名称。
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description CPU策略。
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description key_pair名称，与login_password二选一
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description password，与key_pair二选一。
     *
     * @var string
     */
    public $password;

    /**
     * @description 是否为边缘节点。
     *
     * @var bool
     */
    public $isEdgeWorker;

    /**
     * @description 用户自定义数据。
     *
     * @var string
     */
    public $userData;

    /**
     * @description 节点池ID，欲将节点添加到哪个节点池中。。
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description RDS实例列表。
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description 节点标签。
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'instances'        => 'instances',
        'runtime'          => 'runtime',
        'imageId'          => 'image_id',
        'formatDisk'       => 'format_disk',
        'keepInstanceName' => 'keep_instance_name',
        'cpuPolicy'        => 'cpu_policy',
        'keyPair'          => 'key_pair',
        'password'         => 'password',
        'isEdgeWorker'     => 'is_edge_worker',
        'userData'         => 'user_data',
        'nodepoolId'       => 'nodepool_id',
        'rdsInstances'     => 'rds_instances',
        'tags'             => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }
        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->isEdgeWorker) {
            $res['is_edge_worker'] = $this->isEdgeWorker;
        }
        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = $map['instances'];
            }
        }
        if (isset($map['runtime'])) {
            $model->runtime = runtime::fromMap($map['runtime']);
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }
        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['is_edge_worker'])) {
            $model->isEdgeWorker = $map['is_edge_worker'];
        }
        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
