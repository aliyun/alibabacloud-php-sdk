<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListSceneItemsResponseBody;

use AlibabaCloud\SDK\Airec\V20181012\Models\ListSceneItemsResponseBody\result\detail;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListSceneItemsResponseBody\result\total;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var total
     */
    public $total;

    /**
     * @var detail[]
     */
    public $detail;
    protected $_name = [
        'total'  => 'Total',
        'detail' => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = null !== $this->total ? $this->total->toMap() : null;
        }
        if (null !== $this->detail) {
            $res['Detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Total'])) {
            $model->total = total::fromMap($map['Total']);
        }
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['Detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
