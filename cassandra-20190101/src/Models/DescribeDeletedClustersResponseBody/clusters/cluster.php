<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeDeletedClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @example cds-bp1hy2ip****z46g
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example Cassandra-test-wjk
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example 2019-10-09T14:59:31Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataCenterCount;

    /**
     * @example 2019-10-09T20:29:27Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 3.11
     *
     * @var string
     */
    public $majorVersion;

    /**
     * @example 3.11.5
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $payType;

    /**
     * @example Deleted
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'clusterName'     => 'ClusterName',
        'createdTime'     => 'CreatedTime',
        'dataCenterCount' => 'DataCenterCount',
        'expireTime'      => 'ExpireTime',
        'majorVersion'    => 'MajorVersion',
        'minorVersion'    => 'MinorVersion',
        'payType'         => 'PayType',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->dataCenterCount) {
            $res['DataCenterCount'] = $this->dataCenterCount;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DataCenterCount'])) {
            $model->dataCenterCount = $map['DataCenterCount'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
