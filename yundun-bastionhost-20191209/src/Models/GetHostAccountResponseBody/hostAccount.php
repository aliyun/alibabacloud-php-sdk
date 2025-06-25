<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostAccountResponseBody;

use AlibabaCloud\Dara\Model;

class hostAccount extends Model
{
    /**
     * @var bool
     */
    public $hasPassword;

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
    public $hostId;

    /**
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @var string
     */
    public $hostShareKeyName;

    /**
     * @var string
     */
    public $privateKeyFingerprint;

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
    public $rotationMode;
    protected $_name = [
        'hasPassword' => 'HasPassword',
        'hostAccountId' => 'HostAccountId',
        'hostAccountName' => 'HostAccountName',
        'hostId' => 'HostId',
        'hostShareKeyId' => 'HostShareKeyId',
        'hostShareKeyName' => 'HostShareKeyName',
        'privateKeyFingerprint' => 'PrivateKeyFingerprint',
        'privilegeType' => 'PrivilegeType',
        'protocolName' => 'ProtocolName',
        'rotationMode' => 'RotationMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasPassword) {
            $res['HasPassword'] = $this->hasPassword;
        }

        if (null !== $this->hostAccountId) {
            $res['HostAccountId'] = $this->hostAccountId;
        }

        if (null !== $this->hostAccountName) {
            $res['HostAccountName'] = $this->hostAccountName;
        }

        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        if (null !== $this->hostShareKeyId) {
            $res['HostShareKeyId'] = $this->hostShareKeyId;
        }

        if (null !== $this->hostShareKeyName) {
            $res['HostShareKeyName'] = $this->hostShareKeyName;
        }

        if (null !== $this->privateKeyFingerprint) {
            $res['PrivateKeyFingerprint'] = $this->privateKeyFingerprint;
        }

        if (null !== $this->privilegeType) {
            $res['PrivilegeType'] = $this->privilegeType;
        }

        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
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
        if (isset($map['HasPassword'])) {
            $model->hasPassword = $map['HasPassword'];
        }

        if (isset($map['HostAccountId'])) {
            $model->hostAccountId = $map['HostAccountId'];
        }

        if (isset($map['HostAccountName'])) {
            $model->hostAccountName = $map['HostAccountName'];
        }

        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        if (isset($map['HostShareKeyId'])) {
            $model->hostShareKeyId = $map['HostShareKeyId'];
        }

        if (isset($map['HostShareKeyName'])) {
            $model->hostShareKeyName = $map['HostShareKeyName'];
        }

        if (isset($map['PrivateKeyFingerprint'])) {
            $model->privateKeyFingerprint = $map['PrivateKeyFingerprint'];
        }

        if (isset($map['PrivilegeType'])) {
            $model->privilegeType = $map['PrivilegeType'];
        }

        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }

        if (isset($map['RotationMode'])) {
            $model->rotationMode = $map['RotationMode'];
        }

        return $model;
    }
}
