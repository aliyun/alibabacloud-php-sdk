<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Tea\Model;

class UpdatePoolShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example PoolTest
     *
     * @var string
     */
    public $poolName;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $resourceLimitsShrink;
    protected $_name = [
        'poolName'             => 'PoolName',
        'priority'             => 'Priority',
        'resourceLimitsShrink' => 'ResourceLimits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->resourceLimitsShrink) {
            $res['ResourceLimits'] = $this->resourceLimitsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePoolShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ResourceLimits'])) {
            $model->resourceLimitsShrink = $map['ResourceLimits'];
        }

        return $model;
    }
}
