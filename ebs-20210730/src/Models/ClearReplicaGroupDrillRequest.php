<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class ClearReplicaGroupDrillRequest extends Model
{
    /**
     * @var string
     */
    public $drillId;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'drillId'  => 'DrillId',
        'groupId'  => 'GroupId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drillId) {
            $res['DrillId'] = $this->drillId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (isset($map['DrillId'])) {
            $model->drillId = $map['DrillId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
