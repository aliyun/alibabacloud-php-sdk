<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListResponseBody;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~118841~~).
     *
     * For more information about sample requests, see the **"Examples"** section of this topic.
     * @example false
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @example 0
     *
     * @var string
     */
    public $blackholdingCount;

    /**
     * @var int
     */
    public $coverageType;

    /**
     * @description DescribeInstanceList
     *
     * @example 1640275200000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example 1592886047000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example ddosbgp-cn-oew1pjrk****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the request.
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipType;

    /**
     * @description WB269094
     *
     * @example gamebox
     *
     * @var string
     */
    public $product;

    /**
     * @description Queries the details of all Anti-DDoS Origin instances.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The remarks of the instance.
     *
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'autoRenewal'       => 'AutoRenewal',
        'blackholdingCount' => 'BlackholdingCount',
        'coverageType'      => 'CoverageType',
        'expireTime'        => 'ExpireTime',
        'gmtCreate'         => 'GmtCreate',
        'instanceId'        => 'InstanceId',
        'instanceType'      => 'InstanceType',
        'ipType'            => 'IpType',
        'product'           => 'Product',
        'remark'            => 'Remark',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->blackholdingCount) {
            $res['BlackholdingCount'] = $this->blackholdingCount;
        }
        if (null !== $this->coverageType) {
            $res['CoverageType'] = $this->coverageType;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['BlackholdingCount'])) {
            $model->blackholdingCount = $map['BlackholdingCount'];
        }
        if (isset($map['CoverageType'])) {
            $model->coverageType = $map['CoverageType'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
