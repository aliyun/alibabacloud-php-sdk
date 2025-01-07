<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ReplaceRCInstanceSystemDiskRequest extends Model
{
    /**
     * @description The image ID that is used when you reinstall the OS.
     *
     * @example m-2zec4lvlhcdkyd13****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The instance ID.
     *
     * @example rc-m5ei7b1w38w2l91x****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The reserved parameter. This parameter is not supported.
     *
     * @example None
     *
     * @var bool
     */
    public $isLocalDisk;

    /**
     * @description The name of the new key pair. If you do not specify this parameter, you must reset the key pair after the OS is reinstalled.
     *
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The new logon password of the RDS Custom instance. If you do not specify this parameter, you must reset the logon password after the OS is reinstalled.
     *
     *   The value must be 8 to 30 characters in length.
     *   The value must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. Supported special characters include: ( ) \\` ~ ! @ # $ % ^ & \\* - _ + =
     *
     * @example testPassword
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID.
     *
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
