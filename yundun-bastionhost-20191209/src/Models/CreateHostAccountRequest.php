<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateHostAccountRequest extends Model
{
    /**
     * @description The name of the host account. The name can be up to 128 characters in length.
     *
     * This parameter is required.
     *
     * @example abc
     *
     * @var string
     */
    public $hostAccountName;

    /**
     * @description The ID of the host to which you want to add a host account.
     *
     * >  You can call the [ListHosts](https://help.aliyun.com/document_detail/200665.html) operation to query the ID of the host.
     *
     * This parameter is required.
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
     * @description The ID of the bastion host in which you want to add a host account to the host.
     *
     * >  You can call the [DescribeInstances](https://help.aliyun.com/document_detail/153281.html) operation to query the ID of the bastion host.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The passphrase for the private key of the host account.
     *
     * > You can configure this parameter only if ProtocolName is set to SSH. You do not need to configure this parameter if ProtocolName is set to RDP.
     *
     * @example ****
     *
     * @var string
     */
    public $passPhrase;

    /**
     * @description The password of the host account.
     *
     * @example ****
     *
     * @var string
     */
    public $password;

    /**
     * @description The private key of the host account. Specify a Base64-encoded string.
     *
     * > This parameter is valid only if ProtocolName is set to SSH. You do not need to configure this parameter if ProtocolName is set to RDP. You can configure a password and a private key for the host account at the same time. If both a password and a private key are configured for the host account, Bastionhost preferentially uses the private key for logon.
     *
     * @example ****
     *
     * @var string
     */
    public $privateKey;

    /**
     * @description The protocol of the host to which you want to add a host account.
     *
     * Valid values:
     *
     *   SSH
     *   RDP
     *
     * This parameter is required.
     *
     * @example SSH
     *
     * @var string
     */
    public $protocolName;

    /**
     * @description The region ID of the bastion host in which you want to add a host account to the host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostAccountName' => 'HostAccountName',
        'hostId' => 'HostId',
        'hostShareKeyId' => 'HostShareKeyId',
        'instanceId' => 'InstanceId',
        'passPhrase' => 'PassPhrase',
        'password' => 'Password',
        'privateKey' => 'PrivateKey',
        'protocolName' => 'ProtocolName',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

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
