<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheInstancesResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheInstancesResponseBody\ispFlushCacheInstances\quotaInfo;
use AlibabaCloud\Tea\Model;

class ispFlushCacheInstances extends Model
{
    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var quotaInfo
     */
    public $quotaInfo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'expireTime'      => 'ExpireTime',
        'expireTimestamp' => 'ExpireTimestamp',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'isp'             => 'Isp',
        'quotaInfo'       => 'QuotaInfo',
        'status'          => 'Status',
        'versionCode'     => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->quotaInfo) {
            $res['QuotaInfo'] = null !== $this->quotaInfo ? $this->quotaInfo->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ispFlushCacheInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['QuotaInfo'])) {
            $model->quotaInfo = quotaInfo::fromMap($map['QuotaInfo']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
