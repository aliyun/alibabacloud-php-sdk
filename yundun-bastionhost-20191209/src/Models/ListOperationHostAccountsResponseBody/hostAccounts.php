<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostAccountsResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostAccountsResponseBody\hostAccounts\SSHConfig;
use AlibabaCloud\Tea\Model;

class hostAccounts extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hasPassword;

    /**
     * @example 1
     *
     * @var string
     */
    public $hostAccountId;

    /**
     * @example root
     *
     * @var string
     */
    public $hostAccountName;

    /**
     * @example １
     *
     * @var string
     */
    public $hostId;

    /**
     * @example 3
     *
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @example fe:ca:37:42:30:00:9d:95:e6:73:e5:b0:32:0a:**:**
     *
     * @var string
     */
    public $privateKeyFingerprint;

    /**
     * @example SSH
     *
     * @var string
     */
    public $protocolName;

    /**
     * @var SSHConfig
     */
    public $SSHConfig;
    protected $_name = [
        'hasPassword'           => 'HasPassword',
        'hostAccountId'         => 'HostAccountId',
        'hostAccountName'       => 'HostAccountName',
        'hostId'                => 'HostId',
        'hostShareKeyId'        => 'HostShareKeyId',
        'privateKeyFingerprint' => 'PrivateKeyFingerprint',
        'protocolName'          => 'ProtocolName',
        'SSHConfig'             => 'SSHConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['SSHConfig'] = null !== $this->SSHConfig ? $this->SSHConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostAccounts
     */
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
