<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\CreateJobRequest\tasks;

use AlibabaCloud\SDK\EHPC\V20230701\Models\CreateJobRequest\tasks\taskSpec\resource;
use AlibabaCloud\SDK\EHPC\V20230701\Models\CreateJobRequest\tasks\taskSpec\taskExecutor;
use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'resource'     => 'Resource',
        'taskExecutor' => 'TaskExecutor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->taskExecutor) {
            $res['TaskExecutor'] = [];
            if (null !== $this->taskExecutor && \is_array($this->taskExecutor)) {
                $n = 0;
                foreach ($this->taskExecutor as $item) {
                    $res['TaskExecutor'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }
        if (isset($map['TaskExecutor'])) {
            if (!empty($map['TaskExecutor'])) {
                $model->taskExecutor = [];
                $n                   = 0;
                foreach ($map['TaskExecutor'] as $item) {
                    $model->taskExecutor[$n++] = null !== $item ? taskExecutor::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
