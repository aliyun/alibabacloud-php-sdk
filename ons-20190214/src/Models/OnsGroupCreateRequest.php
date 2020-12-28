<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsGroupCreateRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $groupType;
    protected $_name = [
        'groupId'    => 'GroupId',
        'remark'     => 'Remark',
        'instanceId' => 'InstanceId',
        'groupType'  => 'GroupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsGroupCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        return $model;
    }
}
