<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateHostAccountRequest extends Model
{
    /**
     * @description The passphrase of the private key for the host account.
     *
     * >  You can specify this parameter when the ProtocolName parameter is set to SSH. If the ProtocolName parameter is set to RDP, you do not need to specify this parameter.
     * @example abc
     *
     * @var string
     */
    public $hostAccountName;

    /**
     * @description The ID of the shared key.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The protocol of the host to which you want to add a host account.
     *
     * Valid values:
     *
     *   SSH
     *   RDP
     *
     * @example 1
     *
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @description master
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The private key of the host account. The value is a Base64-encoded string.
     *
     * >  This parameter takes effect only when the ProtocolName parameter is set to SSH. If the ProtocolName parameter is set to RDP, you do not need to specify this parameter. You can configure a password and a private key for the host account at the same time. If both a password and a private key are configured for the host account, Bastionhost preferentially uses the private key to log on to the host.
     * @example ****
     *
     * @var string
     */
    public $passPhrase;

    /**
     * @description The region ID of the bastion host in which you want to add a host account to the host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example ****
     *
     * @var string
     */
    public $password;

    /**
     * @description The ID of the host to which you want to add a host account.
     *
     * >  You can call the [ListHosts](~~200665~~) operation to query the ID of the host.
     * @example ****
     *
     * @var string
     */
    public $privateKey;

    /**
     * @description The ID of the bastion host in which you want to add a host account to the host.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example SSH
     *
     * @var string
     */
    public $protocolName;

    /**
     * @description The password of the host account.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostAccountName' => 'HostAccountName',
        'hostId'          => 'HostId',
        'hostShareKeyId'  => 'HostShareKeyId',
        'instanceId'      => 'InstanceId',
        'passPhrase'      => 'PassPhrase',
        'password'        => 'Password',
        'privateKey'      => 'PrivateKey',
        'protocolName'    => 'ProtocolName',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHostAccountRequest
     */
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
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
