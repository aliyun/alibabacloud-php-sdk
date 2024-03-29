<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponseBody\mountPoints;

use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponseBody\mountPoints\instances\vscs;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example ["ecs-instance1", "ecs-instance2"]
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @var vscs[]
     */
    public $vscs;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'status'     => 'Status',
        'vscs'       => 'Vscs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vscs) {
            $res['Vscs'] = [];
            if (null !== $this->vscs && \is_array($this->vscs)) {
                $n = 0;
                foreach ($this->vscs as $item) {
                    $res['Vscs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Vscs'])) {
            if (!empty($map['Vscs'])) {
                $model->vscs = [];
                $n           = 0;
                foreach ($map['Vscs'] as $item) {
                    $model->vscs[$n++] = null !== $item ? vscs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
