<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeInstanceListResponse;

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
    public $packId;

    /**
     * @var int
     */
    public $gmtCreate;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'product'    => 'Product',
        'remark'     => 'Remark',
        'status'     => 'Status',
        'packId'     => 'PackId',
        'gmtCreate'  => 'GmtCreate',
    ];

    public function validate()
    {
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('product', $this->product, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('packId', $this->packId, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
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
        if (null !== $this->packId) {
            $res['PackId'] = $this->packId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (isset($map['PackId'])) {
            $model->packId = $map['PackId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        return $model;
    }
}
