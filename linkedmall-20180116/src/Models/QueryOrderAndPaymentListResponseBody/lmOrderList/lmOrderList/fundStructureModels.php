<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList;

use AlibabaCloud\Tea\Model;

class fundStructureModels extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList\fundStructureModels\fundStructureModels[]
     */
    public $fundStructureModels;
    protected $_name = [
        'fundStructureModels' => 'FundStructureModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fundStructureModels) {
            $res['FundStructureModels'] = [];
            if (null !== $this->fundStructureModels && \is_array($this->fundStructureModels)) {
                $n = 0;
                foreach ($this->fundStructureModels as $item) {
                    $res['FundStructureModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fundStructureModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FundStructureModels'])) {
            if (!empty($map['FundStructureModels'])) {
                $model->fundStructureModels = [];
                $n                          = 0;
                foreach ($map['FundStructureModels'] as $item) {
                    $model->fundStructureModels[$n++] = null !== $item ? \AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList\fundStructureModels\fundStructureModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
