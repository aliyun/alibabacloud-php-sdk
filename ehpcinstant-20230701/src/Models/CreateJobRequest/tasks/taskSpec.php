<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec\resource;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec\taskExecutor;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec\volumeMount;

class taskSpec extends Model
{
    /**
     * @var resource
     */
    public $resource;

    /**
     * @var taskExecutor[]
     */
    public $taskExecutor;

    /**
     * @var volumeMount[]
     */
    public $volumeMount;
    protected $_name = [
        'resource' => 'Resource',
        'taskExecutor' => 'TaskExecutor',
        'volumeMount' => 'VolumeMount',
    ];

    public function validate()
    {
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        if (\is_array($this->taskExecutor)) {
            Model::validateArray($this->taskExecutor);
        }
        if (\is_array($this->volumeMount)) {
            Model::validateArray($this->volumeMount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->taskExecutor) {
            if (\is_array($this->taskExecutor)) {
                $res['TaskExecutor'] = [];
                $n1 = 0;
                foreach ($this->taskExecutor as $item1) {
                    $res['TaskExecutor'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->volumeMount) {
            if (\is_array($this->volumeMount)) {
                $res['VolumeMount'] = [];
                $n1 = 0;
                foreach ($this->volumeMount as $item1) {
                    $res['VolumeMount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }

        if (isset($map['TaskExecutor'])) {
            if (!empty($map['TaskExecutor'])) {
                $model->taskExecutor = [];
                $n1 = 0;
                foreach ($map['TaskExecutor'] as $item1) {
                    $model->taskExecutor[$n1++] = taskExecutor::fromMap($item1);
                }
            }
        }

        if (isset($map['VolumeMount'])) {
            if (!empty($map['VolumeMount'])) {
                $model->volumeMount = [];
                $n1 = 0;
                foreach ($map['VolumeMount'] as $item1) {
                    $model->volumeMount[$n1++] = volumeMount::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
