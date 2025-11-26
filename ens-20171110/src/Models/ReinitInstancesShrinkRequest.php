<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ReinitInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'imageId' => 'ImageId',
        'instanceIdsShrink' => 'InstanceIds',
        'password' => 'Password',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
