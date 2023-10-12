<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class RetryTasksShrinkRequest extends Model
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
     * @var string
     */
    public $retryTasksShrink;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'retryTasksShrink' => 'RetryTasks',
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
        if (null !== $this->retryTasksShrink) {
            $res['RetryTasks'] = $this->retryTasksShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetryTasksShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RetryTasks'])) {
            $model->retryTasksShrink = $map['RetryTasks'];
        }

        return $model;
    }
}
