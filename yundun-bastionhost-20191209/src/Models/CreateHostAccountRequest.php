<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class CreateHostAccountRequest extends Model
{
    /**
     * @var string
     */
    public $hostAccountName;

    /**
     * @var string
     */
    public $hostId;

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
    public $protocolName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rotationMode;
    protected $_name = [
        'hostAccountName' => 'HostAccountName',
        'hostId' => 'HostId',
        'hostShareKeyId' => 'HostShareKeyId',
        'instanceId' => 'InstanceId',
        'passPhrase' => 'PassPhrase',
        'password' => 'Password',
        'privateKey' => 'PrivateKey',
        'privilegeType' => 'PrivilegeType',
        'protocolName' => 'ProtocolName',
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
        if (null !== $this->hostAccountName) {
            $res['HostAccountName'] = $this->hostAccountName;
        }

        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
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

        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
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
        if (isset($map['HostAccountName'])) {
            $model->hostAccountName = $map['HostAccountName'];
        }

        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
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

        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
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
