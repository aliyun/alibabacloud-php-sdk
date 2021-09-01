<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderIdByPayIdResponseBody;

use AlibabaCloud\Tea\Model;

class lmOrderIds extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderIdByPayIdResponseBody\lmOrderIds\lmOrderIds[]
     */
    public $lmOrderIds;
    protected $_name = [
        'lmOrderIds' => 'LmOrderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmOrderIds) {
            $res['LmOrderIds'] = [];
            if (null !== $this->lmOrderIds && \is_array($this->lmOrderIds)) {
                $n = 0;
                foreach ($this->lmOrderIds as $item) {
                    $res['LmOrderIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmOrderIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmOrderIds'])) {
            if (!empty($map['LmOrderIds'])) {
                $model->lmOrderIds = [];
                $n                 = 0;
                foreach ($map['LmOrderIds'] as $item) {
                    $model->lmOrderIds[$n++] = null !== $item ? \AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderIdByPayIdResponseBody\lmOrderIds\lmOrderIds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
