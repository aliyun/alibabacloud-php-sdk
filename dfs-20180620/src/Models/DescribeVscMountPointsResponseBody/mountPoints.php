<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponseBody\mountPoints\instances;

class mountPoints extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $instanceTotalCount;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var string
     */
    public $mountPointAlias;

    /**
     * @var string
     */
    public $mountPointId;
    protected $_name = [
        'description' => 'Description',
        'instanceTotalCount' => 'InstanceTotalCount',
        'instances' => 'Instances',
        'mountPointAlias' => 'MountPointAlias',
        'mountPointId' => 'MountPointId',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceTotalCount) {
            $res['InstanceTotalCount'] = $this->instanceTotalCount;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mountPointAlias) {
            $res['MountPointAlias'] = $this->mountPointAlias;
        }

        if (null !== $this->mountPointId) {
            $res['MountPointId'] = $this->mountPointId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceTotalCount'])) {
            $model->instanceTotalCount = $map['InstanceTotalCount'];
        }

        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1] = instances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MountPointAlias'])) {
            $model->mountPointAlias = $map['MountPointAlias'];
        }

        if (isset($map['MountPointId'])) {
            $model->mountPointId = $map['MountPointId'];
        }

        return $model;
    }
}
