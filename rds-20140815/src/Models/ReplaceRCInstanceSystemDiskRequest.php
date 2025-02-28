<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ReplaceRCInstanceSystemDiskRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $isLocalDisk;
    /**
     * @var string
     */
    public $keyPairName;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'imageId'     => 'ImageId',
        'instanceId'  => 'InstanceId',
        'isLocalDisk' => 'IsLocalDisk',
        'keyPairName' => 'KeyPairName',
        'password'    => 'Password',
        'regionId'    => 'RegionId',
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isLocalDisk) {
            $res['IsLocalDisk'] = $this->isLocalDisk;
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsLocalDisk'])) {
            $model->isLocalDisk = $map['IsLocalDisk'];
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
