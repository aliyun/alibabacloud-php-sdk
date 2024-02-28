<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ResetHostAccountCredentialRequest extends Model
{
    /**
     * @description The type of the logon credential that you want to delete. Valid values:
     *
     *   **Password**
     *   **PrivateKey**
     *
     * @example Password
     *
     * @var string
     */
    public $credentialType;

    /**
     * @description The ID of the host account for which the logon credential is to be deleted.
     *
     * >  You can call the [ListHostAccounts](~~204372~~) operation to query the ID of the host account.
     * @example 1
     *
     * @var string
     */
    public $hostAccountId;

    /**
     * @description The ID of the bastion host from which you want to delete the logon credential for the host account.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host from which you want to delete the logon credential for the host account.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
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
