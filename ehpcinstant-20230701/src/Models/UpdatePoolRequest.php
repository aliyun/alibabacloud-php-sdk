<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UpdatePoolRequest\resourceLimits;

class UpdatePoolRequest extends Model
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
     * @var resourceLimits
     */
    public $resourceLimits;
    protected $_name = [
        'poolName'       => 'PoolName',
        'priority'       => 'Priority',
        'resourceLimits' => 'ResourceLimits',
    ];

    public function validate()
    {
        if (null !== $this->resourceLimits) {
            $this->resourceLimits->validate();
        }
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

        if (null !== $this->resourceLimits) {
            $res['ResourceLimits'] = null !== $this->resourceLimits ? $this->resourceLimits->toArray($noStream) : $this->resourceLimits;
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
            $model->resourceLimits = resourceLimits::fromMap($map['ResourceLimits']);
        }

        return $model;
    }
}
