<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListItemsResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\ListItemsResponseBody\result\detail;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListItemsResponseBody\result\total;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @description total
     *
     * @var total
     */
    public $total;
    protected $_name = [
        'detail' => 'detail',
        'total'  => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['total'] = null !== $this->total ? $this->total->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            if (!empty($map['detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = total::fromMap($map['total']);
        }

        return $model;
    }
}
