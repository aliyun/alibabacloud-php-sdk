<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @example gws-rhz99q8rc****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 2019-05-15T06:05:40.000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 3
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description VPC ID。
     *
     * @example vpc-bp1nq8oshqudln3hy****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'createTime'    => 'CreateTime',
        'instanceCount' => 'InstanceCount',
        'status'        => 'Status',
        'vpcId'         => 'VpcId',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
