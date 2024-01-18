<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\nodes;

use AlibabaCloud\Tea\Model;

class nodesInfo extends Model
{
    /**
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @example /opt/sge/default/
     *
     * @var string
     */
    public $dir;

    /**
     * @example compute000
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example Compute
     *
     * @var string
     */
    public $role;

    /**
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
     * @return nodesInfo
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
