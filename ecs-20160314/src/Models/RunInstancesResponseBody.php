<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\RunInstancesResponseBody\instanceIdSets;
use AlibabaCloud\Tea\Model;

class RunInstancesResponseBody extends Model
{
    /**
     * @var instanceIdSets
     */
    public $instanceIdSets;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'instanceIdSets' => 'InstanceIdSets',
        'requestId'      => 'RequestId',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdSets) {
            $res['InstanceIdSets'] = null !== $this->instanceIdSets ? $this->instanceIdSets->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdSets'])) {
            $model->instanceIdSets = instanceIdSets::fromMap($map['InstanceIdSets']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
