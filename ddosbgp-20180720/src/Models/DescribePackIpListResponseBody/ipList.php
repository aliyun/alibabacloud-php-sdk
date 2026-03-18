<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackIpListResponseBody;

use AlibabaCloud\Dara\Model;

class ipList extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var int
     */
    public $nsmExpireAt;

    /**
     * @var int
     */
    public $nsmStartAt;

    /**
     * @var int
     */
    public $nsmStatus;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'ip' => 'Ip',
        'memberUid' => 'MemberUid',
        'nsmExpireAt' => 'NsmExpireAt',
        'nsmStartAt' => 'NsmStartAt',
        'nsmStatus' => 'NsmStatus',
        'product' => 'Product',
        'region' => 'Region',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->nsmExpireAt) {
            $res['NsmExpireAt'] = $this->nsmExpireAt;
        }

        if (null !== $this->nsmStartAt) {
            $res['NsmStartAt'] = $this->nsmStartAt;
        }

        if (null !== $this->nsmStatus) {
            $res['NsmStatus'] = $this->nsmStatus;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['NsmExpireAt'])) {
            $model->nsmExpireAt = $map['NsmExpireAt'];
        }

        if (isset($map['NsmStartAt'])) {
            $model->nsmStartAt = $map['NsmStartAt'];
        }

        if (isset($map['NsmStatus'])) {
            $model->nsmStatus = $map['NsmStatus'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
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
