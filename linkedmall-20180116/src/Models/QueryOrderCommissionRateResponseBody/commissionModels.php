<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody\commissionModels\commissionInfo;
use AlibabaCloud\Tea\Model;

class commissionModels extends Model
{
    /**
     * @var commissionInfo
     */
    public $commissionInfo;

    /**
     * @example 45******23
     *
     * @var int
     */
    public $lmOrderId;
    protected $_name = [
        'commissionInfo' => 'CommissionInfo',
        'lmOrderId'      => 'LmOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commissionInfo) {
            $res['CommissionInfo'] = null !== $this->commissionInfo ? $this->commissionInfo->toMap() : null;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commissionModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommissionInfo'])) {
            $model->commissionInfo = commissionInfo::fromMap($map['CommissionInfo']);
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }

        return $model;
    }
}
