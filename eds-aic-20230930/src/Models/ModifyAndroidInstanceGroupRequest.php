<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ModifyAndroidInstanceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instanceGroupId;
    /**
     * @var string
     */
    public $newInstanceGroupName;
    /**
     * @var string
     */
    public $policyGroupId;
    protected $_name = [
        'instanceGroupId'      => 'InstanceGroupId',
        'newInstanceGroupName' => 'NewInstanceGroupName',
        'policyGroupId'        => 'PolicyGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }

        if (null !== $this->newInstanceGroupName) {
            $res['NewInstanceGroupName'] = $this->newInstanceGroupName;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
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
        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }

        if (isset($map['NewInstanceGroupName'])) {
            $model->newInstanceGroupName = $map['NewInstanceGroupName'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        return $model;
    }
}
