<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ResetHostAccountCredentialRequest extends Model
{
    /**
     * @description ResetHostAccountCredential
     *
     * @example Password
     *
     * @var string
     */
    public $credentialType;

    /**
     * @description WB662865
     *
     * @example 1
     *
     * @var string
     */
    public $hostAccountId;

    /**
     * @description Deletes the logon credential of a specified host account of a specified Bastionhost instance. The logon credential can be the password or SSH private key.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description ResetHostAccountCredential
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'credentialType' => 'CredentialType',
        'hostAccountId'  => 'HostAccountId',
        'instanceId'     => 'InstanceId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }
        if (null !== $this->hostAccountId) {
            $res['HostAccountId'] = $this->hostAccountId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetHostAccountCredentialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }
        if (isset($map['HostAccountId'])) {
            $model->hostAccountId = $map['HostAccountId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
