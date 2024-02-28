<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\promDetailList\promDetail;
use AlibabaCloud\Tea\Model;

class promDetailList extends Model
{
    /**
     * @var promDetail[]
     */
    public $promDetail;
    protected $_name = [
        'promDetail' => 'PromDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promDetail) {
            $res['PromDetail'] = [];
            if (null !== $this->promDetail && \is_array($this->promDetail)) {
                $n = 0;
                foreach ($this->promDetail as $item) {
                    $res['PromDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromDetail'])) {
            if (!empty($map['PromDetail'])) {
                $model->promDetail = [];
                $n                 = 0;
                foreach ($map['PromDetail'] as $item) {
                    $model->promDetail[$n++] = null !== $item ? promDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
