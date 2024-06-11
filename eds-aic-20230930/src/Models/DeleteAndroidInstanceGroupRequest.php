<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeleteAndroidInstanceGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $instanceGroupIds;
    protected $_name = [
        'instanceGroupIds' => 'InstanceGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceGroupIds) {
            $res['InstanceGroupIds'] = $this->instanceGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAndroidInstanceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceGroupIds'])) {
            if (!empty($map['InstanceGroupIds'])) {
                $model->instanceGroupIds = $map['InstanceGroupIds'];
            }
        }

        return $model;
    }
}
