<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackIpListResponseBody;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'status'  => 'Status',
        'remark'  => 'Remark',
        'product' => 'Product',
        'ip'      => 'Ip',
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
