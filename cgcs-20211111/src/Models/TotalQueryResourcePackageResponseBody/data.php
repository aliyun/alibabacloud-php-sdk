<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\TotalQueryResourcePackageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 租户UserId
     *
     * @var string
     */
    public $tenantUid;

    /**
     * @description 当前所有有效资源包总量
     *
     * @var int
     */
    public $totalAmount;

    /**
     * @description 计算时间
     *
     * @var string
     */
    public $totalDate;
    protected $_name = [
        'tenantUid'   => 'TenantUid',
        'totalAmount' => 'TotalAmount',
        'totalDate'   => 'TotalDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantUid) {
            $res['TenantUid'] = $this->tenantUid;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->totalDate) {
            $res['TotalDate'] = $this->totalDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantUid'])) {
            $model->tenantUid = $map['TenantUid'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['TotalDate'])) {
            $model->totalDate = $map['TotalDate'];
        }

        return $model;
    }
}
