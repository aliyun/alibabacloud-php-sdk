<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeGWSClusterPolicyRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $asyncMode;

    /**
     * @example gws-rhz99q8rc****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example t-****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'asyncMode' => 'AsyncMode',
        'clusterId' => 'ClusterId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncMode) {
            $res['AsyncMode'] = $this->asyncMode;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGWSClusterPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncMode'])) {
            $model->asyncMode = $map['AsyncMode'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
