<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceRamRoleResponseBody\instanceRamRoleSets;
use AlibabaCloud\Tea\Model;

class DescribeInstanceRamRoleResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var instanceRamRoleSets[]
     */
    public $instanceRamRoleSets;
    protected $_name = [
        'totalCount'          => 'TotalCount',
        'requestId'           => 'RequestId',
        'regionId'            => 'RegionId',
        'instanceRamRoleSets' => 'InstanceRamRoleSets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceRamRoleSets) {
            $res['InstanceRamRoleSets'] = [];
            if (null !== $this->instanceRamRoleSets && \is_array($this->instanceRamRoleSets)) {
                $n = 0;
                foreach ($this->instanceRamRoleSets as $item) {
                    $res['InstanceRamRoleSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceRamRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceRamRoleSets'])) {
            if (!empty($map['InstanceRamRoleSets'])) {
                $model->instanceRamRoleSets = [];
                $n                          = 0;
                foreach ($map['InstanceRamRoleSets'] as $item) {
                    $model->instanceRamRoleSets[$n++] = null !== $item ? instanceRamRoleSets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
