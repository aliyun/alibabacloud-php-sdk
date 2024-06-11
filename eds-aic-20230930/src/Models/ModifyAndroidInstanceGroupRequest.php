<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifyAndroidInstanceGroupRequest extends Model
{
    /**
     * @example ag-cuv4scs4obxhs****
     *
     * @var string
     */
    public $instanceGroupId;

    /**
     * @example newName
     *
     * @var string
     */
    public $newInstanceGroupName;

    /**
     * @example pg-2w97kp89gnsif****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyAndroidInstanceGroupRequest
     */
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
