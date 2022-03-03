<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceDynamicGroupRequest extends Model
{
    /**
     * @var string
     */
    public $dynamicGroupExpression;

    /**
     * @var string
     */
    public $groupDesc;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'dynamicGroupExpression' => 'DynamicGroupExpression',
        'groupDesc'              => 'GroupDesc',
        'groupName'              => 'GroupName',
        'iotInstanceId'          => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicGroupExpression) {
            $res['DynamicGroupExpression'] = $this->dynamicGroupExpression;
        }
        if (null !== $this->groupDesc) {
            $res['GroupDesc'] = $this->groupDesc;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceDynamicGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicGroupExpression'])) {
            $model->dynamicGroupExpression = $map['DynamicGroupExpression'];
        }
        if (isset($map['GroupDesc'])) {
            $model->groupDesc = $map['GroupDesc'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
