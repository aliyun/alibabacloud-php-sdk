<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceRamRoleResponseBody\instanceRamRoleSets;

class DescribeInstanceRamRoleResponseBody extends Model
{
    /**
     * @var instanceRamRoleSets
     */
    public $instanceRamRoleSets;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceRamRoleSets' => 'InstanceRamRoleSets',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->instanceRamRoleSets) {
            $this->instanceRamRoleSets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceRamRoleSets) {
            $res['InstanceRamRoleSets'] = null !== $this->instanceRamRoleSets ? $this->instanceRamRoleSets->toArray($noStream) : $this->instanceRamRoleSets;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
