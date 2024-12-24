<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ReplaceRCInstanceSystemDiskRequest extends Model
{
    /**
     * @example m-2zec4lvlhcdkyd13****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example rc-m5ei7b1w38w2l91x****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example None
     *
     * @var bool
     */
    public $isLocalDisk;

    /**
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example testPassword
     *
     * @var string
     */
    public $password;

    /**
     * @example cn-beijing
     *
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

    /**
     * @param array $map
     *
     * @return ReplaceRCInstanceSystemDiskRequest
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
