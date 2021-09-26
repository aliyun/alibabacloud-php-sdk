<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetGroupDetailRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $groupKeyId;

    /**
     * @var string
     */
    public $groupType;
    protected $_name = [
        'regionId'   => 'RegionId',
        'instanceId' => 'InstanceId',
        'groupKeyId' => 'GroupKeyId',
        'groupType'  => 'GroupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->groupKeyId) {
            $res['GroupKeyId'] = $this->groupKeyId;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGroupDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['GroupKeyId'])) {
            $model->groupKeyId = $map['GroupKeyId'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        return $model;
    }
}
