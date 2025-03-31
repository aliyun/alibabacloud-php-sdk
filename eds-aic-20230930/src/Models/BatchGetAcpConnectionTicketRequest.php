<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketRequest\instanceTasks;

class BatchGetAcpConnectionTicketRequest extends Model
{
    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $instanceGroupId;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var instanceTasks[]
     */
    public $instanceTasks;
    protected $_name = [
        'endUserId' => 'EndUserId',
        'instanceGroupId' => 'InstanceGroupId',
        'instanceIds' => 'InstanceIds',
        'instanceTasks' => 'InstanceTasks',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->instanceTasks)) {
            Model::validateArray($this->instanceTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceTasks) {
            if (\is_array($this->instanceTasks)) {
                $res['InstanceTasks'] = [];
                $n1 = 0;
                foreach ($this->instanceTasks as $item1) {
                    $res['InstanceTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceTasks'])) {
            if (!empty($map['InstanceTasks'])) {
                $model->instanceTasks = [];
                $n1 = 0;
                foreach ($map['InstanceTasks'] as $item1) {
                    $model->instanceTasks[$n1++] = instanceTasks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
