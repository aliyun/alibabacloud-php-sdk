<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class CreatePoolShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $poolName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $resourceLimitsShrink;
    protected $_name = [
        'poolName' => 'PoolName',
        'priority' => 'Priority',
        'resourceLimitsShrink' => 'ResourceLimits',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
