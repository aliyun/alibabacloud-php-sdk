<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\RetryTasksRequest\retryTasks;
use AlibabaCloud\Tea\Model;

class RetryTasksRequest extends Model
{
    /**
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example RetryTasks
     *
     * @var retryTasks[]
     */
    public $retryTasks;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'retryTasks' => 'RetryTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->retryTasks) {
            $res['RetryTasks'] = [];
            if (null !== $this->retryTasks && \is_array($this->retryTasks)) {
                $n = 0;
                foreach ($this->retryTasks as $item) {
                    $res['RetryTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetryTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RetryTasks'])) {
            if (!empty($map['RetryTasks'])) {
                $model->retryTasks = [];
                $n                 = 0;
                foreach ($map['RetryTasks'] as $item) {
                    $model->retryTasks[$n++] = null !== $item ? retryTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
