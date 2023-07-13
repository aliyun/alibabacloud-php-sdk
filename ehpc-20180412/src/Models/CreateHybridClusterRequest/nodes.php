<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The service type of the domain account to which the on-premises node in the cluster belongs. Valid values:
     *
     *   nis
     *   ldap
     *
     * Default value: nis.
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The directory of the on-premises node in the cluster.
     *
     * @example /opt/sge/default/
     *
     * @var string
     */
    public $dir;

    /**
     * @description The hostname of the on-premises node in the cluster.
     *
     * @example test1
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The IP address of the on-premises node in the cluster.
     *
     * @example 00b648b****
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The role of the on-premises node in the cluster. Valid values:
     *
     *   Manager: management node
     *   Login: logon node
     *   Compute: compute node
     *
     * @example Compute
     *
     * @var string
     */
    public $role;

    /**
     * @description The scheduler type of the on-premises node in the cluster. Valid values:
     *
     *   pbs
     *   slurm
     *   opengridscheduler
     *   deadline
     *
     * Default value: pbs.
     * @example pbs
     *
     * @var string
     */
    public $schedulerType;
    protected $_name = [
        'accountType'   => 'AccountType',
        'dir'           => 'Dir',
        'hostName'      => 'HostName',
        'ipAddress'     => 'IpAddress',
        'role'          => 'Role',
        'schedulerType' => 'SchedulerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        return $model;
    }
}
