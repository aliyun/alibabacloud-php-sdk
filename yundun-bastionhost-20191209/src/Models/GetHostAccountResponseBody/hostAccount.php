<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostAccountResponseBody;

use AlibabaCloud\Tea\Model;

class hostAccount extends Model
{
    /**
     * @description Indicates whether a password is configured for the host account. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $hasPassword;

    /**
     * @description The ID of the host account.
     *
     * @example 1
     *
     * @var string
     */
    public $hostAccountId;

    /**
     * @description The name of the host account.
     *
     * @example abc
     *
     * @var string
     */
    public $hostAccountName;

    /**
     * @description The ID of the host to which the host account belongs.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The ID of the shared key.
     *
     * @example 1
     *
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @description The name of the shared key.
     *
     * @example name
     *
     * @var string
     */
    public $hostShareKeyName;

    /**
     * @description The fingerprint of the private key.
     *
     * @example fe:ca:37:42:30:00:9d:95:e6:73:e5:b0:32:0a:**:**
     *
     * @var string
     */
    public $privateKeyFingerprint;

    /**
     * @description The protocol that is used by the host. Valid values:
     *
     *   **SSH**
     *   **RDP**
     *
     * @example SSH
     *
     * @var string
     */
    public $protocolName;
    protected $_name = [
        'hasPassword'           => 'HasPassword',
        'hostAccountId'         => 'HostAccountId',
        'hostAccountName'       => 'HostAccountName',
        'hostId'                => 'HostId',
        'hostShareKeyId'        => 'HostShareKeyId',
        'hostShareKeyName'      => 'HostShareKeyName',
        'privateKeyFingerprint' => 'PrivateKeyFingerprint',
        'protocolName'          => 'ProtocolName',
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
        if (null !== $this->hostShareKeyName) {
            $res['HostShareKeyName'] = $this->hostShareKeyName;
        }
        if (null !== $this->privateKeyFingerprint) {
            $res['PrivateKeyFingerprint'] = $this->privateKeyFingerprint;
        }
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostAccount
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
        if (isset($map['HostShareKeyName'])) {
            $model->hostShareKeyName = $map['HostShareKeyName'];
        }
        if (isset($map['PrivateKeyFingerprint'])) {
            $model->privateKeyFingerprint = $map['PrivateKeyFingerprint'];
        }
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }

        return $model;
    }
}
