<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ReinitInstanceRequest extends Model
{
    /**
     * @description The ID of the image file that is used to reset the instance.
     *
     * This parameter is required.
     * @example m-5wn1dhz5syoo9b48f440ntvad
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example i-5vn4n3y4laeb2ii9zxxltlvzi
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The password of the instance.
     *
     * It must be 8 to 30 characters in length. It must include at least three of the following characters types: uppercase letters, lowercase letters, digits, and special characters. The following special character are supported: `()\\"~! @#$%^&*-_+={}[]:;\\"<>,.?/`
     * @example ***
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'imageId'    => 'ImageId',
        'instanceId' => 'InstanceId',
        'password'   => 'Password',
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
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReinitInstanceRequest
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
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
