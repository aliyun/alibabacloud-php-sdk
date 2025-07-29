<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec\resource;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec\retryPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec\taskExecutor;
use AlibabaCloud\Tea\Model;

class taskSpec extends Model
{
    /**
     * @var resource
     */
    public $resource;

    /**
     * @var retryPolicy
     */
    public $retryPolicy;

    /**
     * @var taskExecutor[]
     */
    public $taskExecutor;
    protected $_name = [
        'resource' => 'Resource',
        'retryPolicy' => 'RetryPolicy',
        'taskExecutor' => 'TaskExecutor',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->retryPolicy) {
            $res['RetryPolicy'] = null !== $this->retryPolicy ? $this->retryPolicy->toMap() : null;
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
        if (isset($map['RetryPolicy'])) {
            $model->retryPolicy = retryPolicy::fromMap($map['RetryPolicy']);
        }
        if (isset($map['TaskExecutor'])) {
            if (!empty($map['TaskExecutor'])) {
                $model->taskExecutor = [];
                $n = 0;
                foreach ($map['TaskExecutor'] as $item) {
                    $model->taskExecutor[$n++] = null !== $item ? taskExecutor::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
