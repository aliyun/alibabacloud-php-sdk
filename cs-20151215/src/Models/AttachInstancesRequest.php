<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class AttachInstancesRequest extends Model
{
    /**
     * @example none
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @example false
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @example aliyun_2_1903_x64_20G_alibase_20200529.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @var string[]
     */
    public $instances;

    /**
     * @example false
     *
     * @var bool
     */
    public $isEdgeWorker;

    /**
     * @example true
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @example secrity-key
     *
     * @var string
     */
    public $keyPair;

    /**
     * @example np615c0e0966124216a0412e10afe0****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @example Hello1234
     *
     * @var string
     */
    public $password;

    /**
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @var Runtime
     */
    public $runtime;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
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
