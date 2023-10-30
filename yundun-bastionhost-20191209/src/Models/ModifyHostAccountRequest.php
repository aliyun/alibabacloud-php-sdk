<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyHostAccountRequest extends Model
{
    /**
     * @description The ID of the host account whose information you want to modify.
     *
     * > You can call the [ListHostAccounts](~~204372~~) operation to query the ID of the host account.
     * @example 1
     *
     * @var string
     */
    public $hostAccountId;

    /**
     * @description The new name of the host account. The name can be up to 128 characters in length.
     *
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
    public $hostShareKeyId;

    /**
     * @description The ID of the bastion host in which you want to modify the information about the host account.
     *
     * > You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The passphrase of the new private key for the host account.
     *
     * > This parameter takes effect only when the protocol of the host is set to SSH. If the protocol of the host is set to RDP, this parameter is not required.
     * @example ****
     *
     * @var string
     */
    public $passPhrase;

    /**
     * @description The new password of the host account.
     *
     * @example ****
     *
     * @var string
     */
    public $password;

    /**
     * @description The new private key of the host account. The value is a Base64-encoded string.
     *
     * > This parameter takes effect only when the protocol of the host is set to SSH. If the protocol of the host is set to RDP, this parameter is not required. You can call the [GetHostAccount](~~204391~~) operation to query the protocol used by the host. You can configure a password and a private key for the host account at the same time. If both a password and a private key are configured for the host account, Bastionhost preferentially uses the private key for logon.
     * @example ****
     *
     * @var string
     */
    public $privateKey;

    /**
     * @description The region ID of the bastion host in which you want to query the details of the host account.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostAccountId'   => 'HostAccountId',
        'hostAccountName' => 'HostAccountName',
        'hostShareKeyId'  => 'HostShareKeyId',
        'instanceId'      => 'InstanceId',
        'passPhrase'      => 'PassPhrase',
        'password'        => 'Password',
        'privateKey'      => 'PrivateKey',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHostAccountRequest
     */
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
