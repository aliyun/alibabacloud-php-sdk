<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceGroupImageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example imgc-075cllfeuazh****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $instanceGroupIds;
    protected $_name = [
        'imageId'          => 'ImageId',
        'instanceGroupIds' => 'InstanceGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceGroupIds) {
            $res['InstanceGroupIds'] = $this->instanceGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceGroupImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceGroupIds'])) {
            if (!empty($map['InstanceGroupIds'])) {
                $model->instanceGroupIds = $map['InstanceGroupIds'];
            }
        }

        return $model;
    }
}
