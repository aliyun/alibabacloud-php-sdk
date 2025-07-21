<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpListResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpListResponseBody\ips\ipExt;
use AlibabaCloud\Tea\Model;

class ips extends Model
{
    /**
     * @description Expiration time
     *
     * @example 2025-06-12T09:19:20Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description IP ID, consistent with the purchased instance ID
     *
     * @example xxx
     *
     * @var string
     */
    public $id;

    /**
     * @description Purchased instance ID
     *
     * @example xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description IP address
     *
     * @example xxx
     *
     * @var string
     */
    public $ip;

    /**
     * @description Extended information
     *
     * @var ipExt
     */
    public $ipExt;

    /**
     * @description Name of the IP pool
     *
     * @example xxx
     *
     * @var string
     */
    public $ipPoolName;

    /**
     * @description Purchase time
     *
     * @example 2025-05-12T09:19:20Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description IP status
     *
     * @example sold
     *
     * @var string
     */
    public $status;

    /**
     * @description Warm-up status
     *
     * @example finish
     *
     * @var string
     */
    public $warmupStatus;

    /**
     * @description Warm-up method
     *
     * @example cusSelfManager
     *
     * @var string
     */
    public $warmupType;
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
    ];

    public function validate() {}

    public function toMap()
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
            $res['IpExt'] = null !== $this->ipExt ? $this->ipExt->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ips
     */
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

        return $model;
    }
}
