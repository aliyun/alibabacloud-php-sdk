<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackIpListResponse;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'ip'      => 'Ip',
        'product' => 'Product',
        'status'  => 'Status',
        'remark'  => 'Remark',
    ];

    public function validate()
    {
        Model::validateRequired('ip', $this->ip, true);
        Model::validateRequired('product', $this->product, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('remark', $this->remark, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
