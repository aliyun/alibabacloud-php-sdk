<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListOptimizeTasksResponseBody;

use AlibabaCloud\Dara\Model;

class optimizeTasks extends Model
{
    /**
     * @var mixed[]
     */
    public $checkpoint;

    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $nextTriggerTime;

    /**
     * @var string
     */
    public $optimizeTaskName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'checkpoint' => 'checkpoint',
        'config' => 'config',
        'createTime' => 'createTime',
        'nextTriggerTime' => 'nextTriggerTime',
        'optimizeTaskName' => 'optimizeTaskName',
        'regionId' => 'regionId',
        'status' => 'status',
        'type' => 'type',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->checkpoint)) {
            Model::validateArray($this->checkpoint);
        }
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkpoint) {
            if (\is_array($this->checkpoint)) {
                $res['checkpoint'] = [];
                foreach ($this->checkpoint as $key1 => $value1) {
                    $res['checkpoint'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->nextTriggerTime) {
            $res['nextTriggerTime'] = $this->nextTriggerTime;
        }

        if (null !== $this->optimizeTaskName) {
            $res['optimizeTaskName'] = $this->optimizeTaskName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['checkpoint'])) {
            if (!empty($map['checkpoint'])) {
                $model->checkpoint = [];
                foreach ($map['checkpoint'] as $key1 => $value1) {
                    $model->checkpoint[$key1] = $value1;
                }
            }
        }

        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['nextTriggerTime'])) {
            $model->nextTriggerTime = $map['nextTriggerTime'];
        }

        if (isset($map['optimizeTaskName'])) {
            $model->optimizeTaskName = $map['optimizeTaskName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
