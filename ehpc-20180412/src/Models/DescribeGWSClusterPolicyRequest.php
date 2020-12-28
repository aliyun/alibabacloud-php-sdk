<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeGWSClusterPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var bool
     */
    public $asyncMode;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'taskId'    => 'TaskId',
        'asyncMode' => 'AsyncMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->asyncMode) {
            $res['AsyncMode'] = $this->asyncMode;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['AsyncMode'])) {
            $model->asyncMode = $map['AsyncMode'];
        }

        return $model;
    }
}
