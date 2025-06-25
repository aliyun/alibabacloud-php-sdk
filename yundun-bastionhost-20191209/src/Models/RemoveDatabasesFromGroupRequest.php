<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class RemoveDatabasesFromGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $databaseIds;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'databaseIds' => 'DatabaseIds',
        'hostGroupId' => 'HostGroupId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->databaseIds)) {
            Model::validateArray($this->databaseIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseIds) {
            if (\is_array($this->databaseIds)) {
                $res['DatabaseIds'] = [];
                $n1 = 0;
                foreach ($this->databaseIds as $item1) {
                    $res['DatabaseIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DatabaseIds'])) {
            if (!empty($map['DatabaseIds'])) {
                $model->databaseIds = [];
                $n1 = 0;
                foreach ($map['DatabaseIds'] as $item1) {
                    $model->databaseIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
