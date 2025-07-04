<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class AttachInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $cpuPolicy;

    /**
     * @var bool
     */
    public $formatDisk;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string[]
     */
    public $instances;

    /**
     * @var bool
     */
    public $isEdgeWorker;

    /**
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @var string
     */
    public $keyPair;

    /**
     * @var string
     */
    public $nodepoolId;

    /**
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
     * @var string
     */
    public $userData;
    protected $_name = [
        'cpuPolicy' => 'cpu_policy',
        'formatDisk' => 'format_disk',
        'imageId' => 'image_id',
        'instances' => 'instances',
        'isEdgeWorker' => 'is_edge_worker',
        'keepInstanceName' => 'keep_instance_name',
        'keyPair' => 'key_pair',
        'nodepoolId' => 'nodepool_id',
        'password' => 'password',
        'rdsInstances' => 'rds_instances',
        'runtime' => 'runtime',
        'tags' => 'tags',
        'userData' => 'user_data',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->rdsInstances)) {
            Model::validateArray($this->rdsInstances);
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instances)) {
                $res['instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['instances'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->rdsInstances)) {
                $res['rds_instances'] = [];
                $n1 = 0;
                foreach ($this->rdsInstances as $item1) {
                    $res['rds_instances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->instances = [];
                $n1 = 0;
                foreach ($map['instances'] as $item1) {
                    $model->instances[$n1] = $item1;
                    ++$n1;
                }
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
                $model->rdsInstances = [];
                $n1 = 0;
                foreach ($map['rds_instances'] as $item1) {
                    $model->rdsInstances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['runtime'])) {
            $model->runtime = Runtime::fromMap($map['runtime']);
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = Tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }

        return $model;
    }
}
