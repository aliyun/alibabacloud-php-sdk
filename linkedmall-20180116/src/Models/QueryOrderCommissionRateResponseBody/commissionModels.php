<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody\commissionModels\commissionInfo;
use AlibabaCloud\Tea\Model;

class commissionModels extends Model
{
    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var commissionInfo
     */
    public $commissionInfo;
    protected $_name = [
        'lmOrderId'      => 'LmOrderId',
        'commissionInfo' => 'CommissionInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->commissionInfo) {
            $res['CommissionInfo'] = null !== $this->commissionInfo ? $this->commissionInfo->toMap() : null;
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
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['CommissionInfo'])) {
            $model->commissionInfo = commissionInfo::fromMap($map['CommissionInfo']);
        }

        return $model;
    }
}
