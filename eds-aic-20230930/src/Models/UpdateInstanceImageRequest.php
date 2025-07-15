<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceImageRequest extends Model
{
    /**
     * @example imgc-075cllfeuazh0****
     *
     * @var string
     */
    public $imageId;

    /**
     * @var string[]
     */
    public $instanceIdList;
    protected $_name = [
        'imageId' => 'ImageId',
        'instanceIdList' => 'InstanceIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = $map['InstanceIdList'];
            }
        }

        return $model;
    }
}
