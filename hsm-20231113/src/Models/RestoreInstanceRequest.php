<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class RestoreInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example image-eaOGHkRDQgh4****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description This parameter is required.
     *
     * @example hsm-cn-mp90fxef****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'imageId'    => 'ImageId',
        'instanceId' => 'InstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
