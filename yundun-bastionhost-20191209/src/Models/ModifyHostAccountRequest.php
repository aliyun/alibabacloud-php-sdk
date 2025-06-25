<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class ModifyHostAccountRequest extends Model
{
    /**
     * @var string
     */
    public $hostAccountId;

    /**
     * @var string
     */
    public $hostAccountName;

    /**
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $passPhrase;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $privilegeType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rotationMode;
    protected $_name = [
        'hostAccountId' => 'HostAccountId',
        'hostAccountName' => 'HostAccountName',
        'hostShareKeyId' => 'HostShareKeyId',
        'instanceId' => 'InstanceId',
        'passPhrase' => 'PassPhrase',
        'password' => 'Password',
        'privateKey' => 'PrivateKey',
        'privilegeType' => 'PrivilegeType',
        'regionId' => 'RegionId',
        'rotationMode' => 'RotationMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostAccountId) {
            $res['HostAccountId'] = $this->hostAccountId;
        }

        if (null !== $this->hostAccountName) {
            $res['HostAccountName'] = $this->hostAccountName;
        }

        if (null !== $this->hostShareKeyId) {
            $res['HostShareKeyId'] = $this->hostShareKeyId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->passPhrase) {
            $res['PassPhrase'] = $this->passPhrase;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }

        if (null !== $this->privilegeType) {
            $res['PrivilegeType'] = $this->privilegeType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rotationMode) {
            $res['RotationMode'] = $this->rotationMode;
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
        if (isset($map['HostAccountId'])) {
            $model->hostAccountId = $map['HostAccountId'];
        }

        if (isset($map['HostAccountName'])) {
            $model->hostAccountName = $map['HostAccountName'];
        }

        if (isset($map['HostShareKeyId'])) {
            $model->hostShareKeyId = $map['HostShareKeyId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PassPhrase'])) {
            $model->passPhrase = $map['PassPhrase'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }

        if (isset($map['PrivilegeType'])) {
            $model->privilegeType = $map['PrivilegeType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RotationMode'])) {
            $model->rotationMode = $map['RotationMode'];
        }

        return $model;
    }
}
