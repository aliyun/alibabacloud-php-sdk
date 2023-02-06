<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceRamRoleResponseBody\instanceRamRoleSets;
use AlibabaCloud\Tea\Model;

class DescribeInstanceRamRoleResponseBody extends Model
{
    /**
     * @description Details about the instance RAM roles.
     *
     * @var instanceRamRoleSets
     */
    public $instanceRamRoleSets;

    /**
     * @description The region ID of the instance RAM role.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of instance RAM roles returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceRamRoleSets' => 'InstanceRamRoleSets',
        'regionId'            => 'RegionId',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRamRoleSets) {
            $res['InstanceRamRoleSets'] = null !== $this->instanceRamRoleSets ? $this->instanceRamRoleSets->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['InstanceRamRoleSets'])) {
            $model->instanceRamRoleSets = instanceRamRoleSets::fromMap($map['InstanceRamRoleSets']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
