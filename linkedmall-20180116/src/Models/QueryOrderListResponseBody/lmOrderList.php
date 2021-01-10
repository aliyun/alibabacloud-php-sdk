<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\lmOrderList\lmOrderList;
use AlibabaCloud\Tea\Model;

class lmOrderList extends Model
{
    /**
     * @var lmOrderList[]
     */
    public $lmOrderList;
    protected $_name = [
        'lmOrderList' => 'LmOrderList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmOrderList) {
            $res['LmOrderList'] = [];
            if (null !== $this->lmOrderList && \is_array($this->lmOrderList)) {
                $n = 0;
                foreach ($this->lmOrderList as $item) {
                    $res['LmOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmOrderList'])) {
            if (!empty($map['LmOrderList'])) {
                $model->lmOrderList = [];
                $n                  = 0;
                foreach ($map['LmOrderList'] as $item) {
                    $model->lmOrderList[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
