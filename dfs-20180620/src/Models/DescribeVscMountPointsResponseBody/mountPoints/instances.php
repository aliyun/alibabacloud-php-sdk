<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponseBody\mountPoints;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponseBody\mountPoints\instances\vscs;

class instances extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var vscs[]
     */
    public $vscs;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'status' => 'Status',
        'vscs' => 'Vscs',
    ];

    public function validate()
    {
        if (\is_array($this->vscs)) {
            Model::validateArray($this->vscs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vscs) {
            if (\is_array($this->vscs)) {
                $res['Vscs'] = [];
                $n1 = 0;
                foreach ($this->vscs as $item1) {
                    $res['Vscs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Vscs'])) {
            if (!empty($map['Vscs'])) {
                $model->vscs = [];
                $n1 = 0;
                foreach ($map['Vscs'] as $item1) {
                    $model->vscs[$n1++] = vscs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
