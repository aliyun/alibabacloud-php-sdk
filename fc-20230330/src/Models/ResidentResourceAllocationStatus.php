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
     * @var ResidentResourceAllocation[]
     */
    public $lastAllocation;
    protected $_name = [
        'lastAllocatedTime' => 'lastAllocatedTime',
        'lastAllocation' => 'lastAllocation',
    ];

    public function validate()
    {
        if (\is_array($this->lastAllocation)) {
            Model::validateArray($this->lastAllocation);
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
            if (\is_array($this->lastAllocation)) {
                $res['lastAllocation'] = [];
                $n1 = 0;
                foreach ($this->lastAllocation as $item1) {
                    $res['lastAllocation'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['lastAllocation'])) {
                $model->lastAllocation = [];
                $n1 = 0;
                foreach ($map['lastAllocation'] as $item1) {
                    $model->lastAllocation[$n1] = ResidentResourceAllocation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
