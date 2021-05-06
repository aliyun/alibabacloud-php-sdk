<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListResponse;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $remark;

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
    public $blackholdingCount;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'expireTime'        => 'ExpireTime',
        'instanceId'        => 'InstanceId',
        'product'           => 'Product',
        'remark'            => 'Remark',
        'status'            => 'Status',
        'ipType'            => 'IpType',
        'autoRenewal'       => 'AutoRenewal',
        'blackholdingCount' => 'BlackholdingCount',
        'gmtCreate'         => 'GmtCreate',
        'instanceType'      => 'InstanceType',
    ];

    public function validate()
    {
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('product', $this->product, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('ipType', $this->ipType, true);
        Model::validateRequired('autoRenewal', $this->autoRenewal, true);
        Model::validateRequired('blackholdingCount', $this->blackholdingCount, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->blackholdingCount) {
            $res['BlackholdingCount'] = $this->blackholdingCount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['BlackholdingCount'])) {
            $model->blackholdingCount = $map['BlackholdingCount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
