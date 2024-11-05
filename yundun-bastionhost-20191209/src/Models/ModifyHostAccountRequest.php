<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyHostAccountRequest extends Model
{
    /**
     * @description The ID of the host account whose information you want to modify.
     *
     * This parameter is required.
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
     * @description The ID of the shared key that is associated with the host.
     *
     * >  You can call the [ListHostShareKeys](https://help.aliyun.com/document_detail/462973.html) operation to query the shared key ID.
     * @example 1
     *
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @description The ID of the bastion host in which you want to modify the information about the host account.
     *
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The passphrase for the new private key of the host account.
     *
     * >  This parameter is valid only if the protocol used by the host is SSH. You do not need to configure this parameter if the protocol used by the host is Remote Desktop Protocol (RDP).
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
     * @description The new private key of the host account. Specify a Base64-encoded string.
     *
     * >  This parameter takes effect only if the protocol used by the host is SSH. You do not need to configure this parameter if the protocol used by the host is Remote Desktop Protocol (RDP). You can call the [GetHostAccount](https://help.aliyun.com/document_detail/204391.html) operation to query the protocol used by the host. You can configure a password and a private key for the host account at the same time. If both a password and a private key are configured for the host account, Bastionhost preferentially uses the private key for logon.
     * @example ****
     *
     * @var string
     */
    public $privateKey;

    /**
     * @description The region ID of the bastion host in which you want to query the details of the host account.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
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
