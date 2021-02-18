<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstancesResponseBody\geoipInstances;

use AlibabaCloud\Tea\Model;

class geoipInstance extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $maxQps;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $maxQpd;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'status'          => 'Status',
        'expireTimestamp' => 'ExpireTimestamp',
        'expireTime'      => 'ExpireTime',
        'maxQps'          => 'MaxQps',
        'createTime'      => 'CreateTime',
        'maxQpd'          => 'MaxQpd',
        'instanceId'      => 'InstanceId',
        'versionCode'     => 'VersionCode',
        'createTimestamp' => 'CreateTimestamp',
        'productCode'     => 'ProductCode',
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
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->maxQpd) {
            $res['MaxQpd'] = $this->maxQpd;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return geoipInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MaxQpd'])) {
            $model->maxQpd = $map['MaxQpd'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
