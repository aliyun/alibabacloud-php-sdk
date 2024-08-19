<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class instanceGroupInfos extends Model
{
    /**
     * @var string
     */
    public $instanceGroupId;

    /**
     * @var string[]
     */
    public $instanceIds;
    protected $_name = [
        'instanceGroupId' => 'InstanceGroupId',
        'instanceIds'     => 'InstanceIds',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceGroupInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }

        return $model;
    }
}
