<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponseBody;

use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponseBody\mountPoints\instances;
use AlibabaCloud\Tea\Model;

class mountPoints extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceTotalCount;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @example hdfs1
     *
     * @var string
     */
    public $mountPointAlias;

    /**
     * @example 037cb49e1d-c***5
     *
     * @var string
     */
    public $mountPointId;
    protected $_name = [
        'description'        => 'Description',
        'instanceTotalCount' => 'InstanceTotalCount',
        'instances'          => 'Instances',
        'mountPointAlias'    => 'MountPointAlias',
        'mountPointId'       => 'MountPointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceTotalCount) {
            $res['InstanceTotalCount'] = $this->instanceTotalCount;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return mountPoints
     */
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
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
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
