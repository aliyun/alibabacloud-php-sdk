<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostAccountsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostAccountsResponseBody\hostAccounts\SSHConfig;

class hostAccounts extends Model
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
    public $privateKeyFingerprint;

    /**
     * @var string
     */
    public $protocolName;

    /**
     * @var SSHConfig
     */
    public $SSHConfig;
    protected $_name = [
        'hasPassword' => 'HasPassword',
        'hostAccountId' => 'HostAccountId',
        'hostAccountName' => 'HostAccountName',
        'hostId' => 'HostId',
        'hostShareKeyId' => 'HostShareKeyId',
        'privateKeyFingerprint' => 'PrivateKeyFingerprint',
        'protocolName' => 'ProtocolName',
        'SSHConfig' => 'SSHConfig',
    ];

    public function validate()
    {
        if (null !== $this->SSHConfig) {
            $this->SSHConfig->validate();
        }
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

        if (null !== $this->privateKeyFingerprint) {
            $res['PrivateKeyFingerprint'] = $this->privateKeyFingerprint;
        }

        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }

        if (null !== $this->SSHConfig) {
            $res['SSHConfig'] = null !== $this->SSHConfig ? $this->SSHConfig->toArray($noStream) : $this->SSHConfig;
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

        if (isset($map['PrivateKeyFingerprint'])) {
            $model->privateKeyFingerprint = $map['PrivateKeyFingerprint'];
        }

        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }

        if (isset($map['SSHConfig'])) {
            $model->SSHConfig = SSHConfig::fromMap($map['SSHConfig']);
        }

        return $model;
    }
}
