<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListResponseBody;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $ipType;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $product;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $blackholdingCount;
    protected $_name = [
        'status'            => 'Status',
        'ipType'            => 'IpType',
        'autoRenewal'       => 'AutoRenewal',
        'remark'            => 'Remark',
        'expireTime'        => 'ExpireTime',
        'product'           => 'Product',
        'gmtCreate'         => 'GmtCreate',
        'instanceId'        => 'InstanceId',
        'instanceType'      => 'InstanceType',
        'blackholdingCount' => 'BlackholdingCount',
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
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
        if (null !== $this->blackholdingCount) {
            $res['BlackholdingCount'] = $this->blackholdingCount;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
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
        if (isset($map['BlackholdingCount'])) {
            $model->blackholdingCount = $map['BlackholdingCount'];
        }

        return $model;
    }
}
