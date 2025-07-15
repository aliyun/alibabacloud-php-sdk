<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketRequest\instanceTasks;
use AlibabaCloud\Tea\Model;

class BatchGetAcpConnectionTicketRequest extends Model
{
    /**
     * @description The ID of the user to whom the cloud phone instance is assigned.
     *
     * @example user
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The ID of the instance group.
     *
     * @example ag-25nt4kk9whjh****
     *
     * @var string
     */
    public $instanceGroupId;

    /**
     * @description The IDs of the cloud phone instances. You can specify 1 to 100 IDs of cloud phone instances.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The instance connection tasks.
     *
     * @var instanceTasks[]
     */
    public $instanceTasks;
    protected $_name = [
        'endUserId' => 'EndUserId',
        'instanceGroupId' => 'InstanceGroupId',
        'instanceIds' => 'InstanceIds',
        'instanceTasks' => 'InstanceTasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->instanceTasks) {
            $res['InstanceTasks'] = [];
            if (null !== $this->instanceTasks && \is_array($this->instanceTasks)) {
                $n = 0;
                foreach ($this->instanceTasks as $item) {
                    $res['InstanceTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetAcpConnectionTicketRequest
     */
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
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['InstanceTasks'])) {
            if (!empty($map['InstanceTasks'])) {
                $model->instanceTasks = [];
                $n = 0;
                foreach ($map['InstanceTasks'] as $item) {
                    $model->instanceTasks[$n++] = null !== $item ? instanceTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
