<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpListResponseBody\ips\ipExt;

class ips extends Model
{
    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var ipExt
     */
    public $ipExt;

    /**
     * @var string
     */
    public $ipPoolName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $warmupStatus;

    /**
     * @var string
     */
    public $warmupType;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'expiredTime' => 'ExpiredTime',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'ip' => 'Ip',
        'ipExt' => 'IpExt',
        'ipPoolName' => 'IpPoolName',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'warmupStatus' => 'WarmupStatus',
        'warmupType' => 'WarmupType',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->ipExt) {
            $this->ipExt->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->ipExt) {
            $res['IpExt'] = null !== $this->ipExt ? $this->ipExt->toArray($noStream) : $this->ipExt;
        }

        if (null !== $this->ipPoolName) {
            $res['IpPoolName'] = $this->ipPoolName;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->warmupStatus) {
            $res['WarmupStatus'] = $this->warmupStatus;
        }

        if (null !== $this->warmupType) {
            $res['WarmupType'] = $this->warmupType;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['IpExt'])) {
            $model->ipExt = ipExt::fromMap($map['IpExt']);
        }

        if (isset($map['IpPoolName'])) {
            $model->ipPoolName = $map['IpPoolName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WarmupStatus'])) {
            $model->warmupStatus = $map['WarmupStatus'];
        }

        if (isset($map['WarmupType'])) {
            $model->warmupType = $map['WarmupType'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
