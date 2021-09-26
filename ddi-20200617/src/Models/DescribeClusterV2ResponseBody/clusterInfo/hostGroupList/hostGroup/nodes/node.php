<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes\node\daemonInfos;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes\node\diskInfos;
use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $supportIpV6;

    /**
     * @var string
     */
    public $innerIp;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $emrExpiredTime;

    /**
     * @var string
     */
    public $pubIp;

    /**
     * @var daemonInfos
     */
    public $daemonInfos;

    /**
     * @var diskInfos
     */
    public $diskInfos;
    protected $_name = [
        'status'         => 'Status',
        'supportIpV6'    => 'SupportIpV6',
        'innerIp'        => 'InnerIp',
        'expiredTime'    => 'ExpiredTime',
        'createTime'     => 'CreateTime',
        'zoneId'         => 'ZoneId',
        'instanceId'     => 'InstanceId',
        'emrExpiredTime' => 'EmrExpiredTime',
        'pubIp'          => 'PubIp',
        'daemonInfos'    => 'DaemonInfos',
        'diskInfos'      => 'DiskInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportIpV6) {
            $res['SupportIpV6'] = $this->supportIpV6;
        }
        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->emrExpiredTime) {
            $res['EmrExpiredTime'] = $this->emrExpiredTime;
        }
        if (null !== $this->pubIp) {
            $res['PubIp'] = $this->pubIp;
        }
        if (null !== $this->daemonInfos) {
            $res['DaemonInfos'] = null !== $this->daemonInfos ? $this->daemonInfos->toMap() : null;
        }
        if (null !== $this->diskInfos) {
            $res['DiskInfos'] = null !== $this->diskInfos ? $this->diskInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportIpV6'])) {
            $model->supportIpV6 = $map['SupportIpV6'];
        }
        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['EmrExpiredTime'])) {
            $model->emrExpiredTime = $map['EmrExpiredTime'];
        }
        if (isset($map['PubIp'])) {
            $model->pubIp = $map['PubIp'];
        }
        if (isset($map['DaemonInfos'])) {
            $model->daemonInfos = daemonInfos::fromMap($map['DaemonInfos']);
        }
        if (isset($map['DiskInfos'])) {
            $model->diskInfos = diskInfos::fromMap($map['DiskInfos']);
        }

        return $model;
    }
}
