<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackIpListResponseBody;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @description The IP address.
     *
     * @example 47.98.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The ID of the member.
     *
     * @example 170858869679****
     *
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
     * @description The type of the cloud asset to which the IP address belongs. Valid values:
     *
     *   **ECS**: an ECS instance.
     *   **SLB**: a CLB instance, originally called an SLB instance.
     *   **EIP**: an EIP. If the IP address belongs to an ALB instance, the value EIP is returned.
     *   **WAF**: a WAF instance.
     *
     * @example ECS
     *
     * @var string
     */
    public $product;

    /**
     * @description The region to which the protected IP address belongs.
     *
     * >  If the protected IP address is in the same region as the instance, this parameter is not returned.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The description of the cloud asset to which the IP address belongs. The asset can be an ECS instance or an SLB instance.
     *
     * >  If no descriptions are provided for the asset, this parameter is not returned.
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the IP address. Valid values:
     *
     *   **normal**: The IP address is in the normal state, which indicates that the IP address is not under attack.
     *   **hole_begin**: Blackhole filtering is triggered for the IP address.
     *
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ip'          => 'Ip',
        'memberUid'   => 'MemberUid',
        'nsmExpireAt' => 'NsmExpireAt',
        'nsmStartAt'  => 'NsmStartAt',
        'nsmStatus'   => 'NsmStatus',
        'product'     => 'Product',
        'region'      => 'Region',
        'remark'      => 'Remark',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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
