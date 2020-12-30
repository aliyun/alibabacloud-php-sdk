<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeDeletedClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $dataCenterCount;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'          => 'Status',
        'dataCenterCount' => 'DataCenterCount',
        'expireTime'      => 'ExpireTime',
        'payType'         => 'PayType',
        'clusterName'     => 'ClusterName',
        'majorVersion'    => 'MajorVersion',
        'createdTime'     => 'CreatedTime',
        'minorVersion'    => 'MinorVersion',
        'clusterId'       => 'ClusterId',
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
        if (null !== $this->dataCenterCount) {
            $res['DataCenterCount'] = $this->dataCenterCount;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DataCenterCount'])) {
            $model->dataCenterCount = $map['DataCenterCount'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
