<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ResidentResourceAllocationStatus extends Model
{
    /**
     * @var string
     */
    public $lastAllocatedTime;

    /**
     * @var ResidentResourceAllocation
     */
    public $lastAllocation;
    protected $_name = [
        'lastAllocatedTime' => 'lastAllocatedTime',
        'lastAllocation' => 'lastAllocation',
    ];

    public function validate()
    {
        if (null !== $this->lastAllocation) {
            $this->lastAllocation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastAllocatedTime) {
            $res['lastAllocatedTime'] = $this->lastAllocatedTime;
        }

        if (null !== $this->lastAllocation) {
            $res['lastAllocation'] = null !== $this->lastAllocation ? $this->lastAllocation->toArray($noStream) : $this->lastAllocation;
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
        if (isset($map['lastAllocatedTime'])) {
            $model->lastAllocatedTime = $map['lastAllocatedTime'];
        }

        if (isset($map['lastAllocation'])) {
            $model->lastAllocation = ResidentResourceAllocation::fromMap($map['lastAllocation']);
        }

        return $model;
    }
}
